
@extends('template.phonecontainer')

@section('backbutton')
    <a href="{{url('/app/home')}}" class="botton-volver">
        <i class="fa fa-angle-left"></i>
    </a>
@stop

@section('content')
    <form method="post" action="{{url('/app/password/'.Auth::user()->id.'/change/process')}}" id="form">
        {{csrf_field()}}
        <div class="my-form-box">
            <div class="my-form-title"><span>Cambiar</span> Clave</div>
            <div class="my-form-body">
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Clave Antigua</label>
                    <input required type="password" name="oldpassword"  placeholder="******">
                </div>
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Clave Nueva</label>
                    <input required type="password" name="newpassword"  id="newpassword"    placeholder="******">
                </div>  
                <div class="my-formgroup">
                    <label for="exampleInputEmail1">Clave Nueva (repetir)</label>
                    <input required type="password" name="password"     id="password"       placeholder="******">
                </div>
            </div>
        </div>
        <br>
        
        <button type="submit" class="mybutton verde" style="width:100%" id="guardar">
            <i class="fa fa-key"></i>
            <span>Cambiar Clave</span>
        </button>
    </form>
    <script>
        var newpassword =document.getElementById('newpassword');
        var password =document.getElementById('password');
        var guardar =document.getElementById('guardar');
        var form =document.getElementById('form');

        password.onkeyup = function(){
            if(newpassword.value!=password.value){
                password.style.borderColor='red';
                guardar.disabled=true;
                form.disabled=true;
                guardar.style.color='grey';
            }else{
                password.style.borderColor='#F7CE26';
                guardar.disabled=false;
                form.disabled=false;
                guardar.style.color='#00e676';
            }
        }
    </script>
@stop