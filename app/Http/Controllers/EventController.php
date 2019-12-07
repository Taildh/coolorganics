<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $events = Event::paginate(5);
        }else{
            $kw = $request->keyword;
            $events = Event::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $events->withPath("?keyword=$kw");
        }
        return view('list-event', [
                        'sukien' => $events
                    ]);
    }
    public function addNew(){
        $model = new Event();
        $events = Event::all();
        return view('event.add-form',compact('model', 'events'));
    }

    public function saveAddNew(Request $request){
        $model = new Event();
        if($request->hasFile('image')){
           
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('homeevent'));
    }

    public function editForm($id){
        $model = Event::find($id);
        if(!$model){
            return redirect()->route('homeevent');
        }
        $events = Event::all();
        return view('event.edit-form',compact('model', 'events'));
    }
    public function saveEdit(Request $request){
        $model = Event::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        if($request->status == null){
            $model->status = 0;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('homeevent'));
    }

    // Xóa
    public function deletePost($id){
        $post= Event::find($id);
        $post->delete();
        return redirect(route('homeevent'));
    }
}