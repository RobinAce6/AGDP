<?php

namespace App\Http\Middleware;

use Closure;
use Auth;



class GenerateMenus
{
    protected $rol;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->rol= 1;
        \Menu::make('menuDinamic', function ($menu) {
            if(!Auth::user()){
                $menu->add('Login', ['url'  => 'login',  'class' => 'nav-link'])->prepend('<img src="../img/home.png" width="30" height="30" alt="">')->data('order', 1);
            }else{
                $menu->add('', ['url'  => 'home',  'class' => 'navbar-brand'])->prepend('<img src="../img/home.png" width="30" height="30" alt="">')->data('order', 1);
            }
            if(Auth::user()){
                switch (Auth::user()->roles()->get()[0]->name) {
                    case 'Recepción':
                        $menu->add('Correspondencia', ['url'  => 'maile',  'class' => 'nav-link text-uppercase']);
                    break;
                    case 'Operador':
                        $menu->add('Correspondencia', ['url'  => 'maile',  'class' => 'nav-link text-uppercase']);
                    break;
                    case 'Archivo':
                        $menu->add('Correspondencia', ['url'  => 'maile',  'class' => 'nav-link text-uppercase']);
                    break;
                    case 'Admin':
                        $menu->add('REGISTRO USUARIO', ['url'  => 'users/create',  'class' => 'nav-link']);
                        $menu->add('Clientes', ['url'  => 'clients',  'class' => 'nav-link text-uppercase']);
                        $menu->add('Proyectos', ['url'  => 'proyect',  'class' => 'nav-link text-uppercase']);
                        $menu->add('DEPENDENCIAS', ['url'  => 'depend',  'class' => 'nav-link text-uppercase']);
                        $menu->add('Correspondencia', ['url'  => 'maile',  'class' => 'nav-link text-uppercase']);
                        $menu->add('OTROS', ['url'  => 'others',  'class' => 'nav-link text-uppercase']);
                    break;
                }
            }
        });   

        return $next($request);
    }
}
