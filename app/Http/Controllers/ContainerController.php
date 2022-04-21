<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    function addContainer(Request $request){

        $container=new Container();
        $container->poids=$request->poids;
        $container->port_depart=$request->port_depart;
        $container->port_arrive=$request->port_arrive;
        $container->time_depart=$request->time_depart;
        $container->time_arrive=$request->time_arrive;
        $container->user_id=$request->user_id;

        $container->save();



    }
function updateContainer($container_id){
  $container=Container::where('container_id', $container_id)->first();
  if($container!==null){
    $container->update(['poids' => request('poids')],
    ['port_depart' => request('port_depart')],
    ['port_arrive' => request('port_arrive')],
    ['time_depart' => request('time_depart')],
    ['time_arrive' => request('time_arrive')]

);}
  }
  function deleteContainer($container_id){
    return Container::where('container_id',$container_id )->delete();
  }

function getContainerByUserId($user_id){
    return container::where('user_id',$user_id)->get();

}


}
