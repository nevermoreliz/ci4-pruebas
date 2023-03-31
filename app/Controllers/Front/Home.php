<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('Front/Home');
    }

    public function otro()
    {
        
        $seccion = $this->request->getGet('seccion');
        $contenido = view('Front/Home', []);
        return $this->response->setJSON([
            'seccion' => $seccion,
            'contenido' => $contenido
        ]);
    }

    public function uno()
    {
        // return view('Front/Pagina1');
        // $seccion = $this->request->getPost('seccion');
        $seccion = $this->request->getGet('seccion');
        $contenido = view('Front/Pagina1', []);
        return $this->response->setJSON([
            'seccion' => $seccion,
            'contenido' => $contenido
        ]);
    }

    public function dos()
    {
        // return view('Front/Pagina2');
        $seccion = $this->request->getPost('seccion');
        $contenido = view('Front/Pagina2', []);
        return $this->response->setJSON([
            'seccion' => $seccion,
            'contenido' => $contenido
        ]);
    }

    public function tres()
    {
        // return view('Front/Pagina3');
        $seccion = $this->request->getGet('seccion');
        $contenido = view('Front/Pagina3', []);
        return $this->response->setJSON([
            'seccion' => $seccion,
            'contenido' => $contenido
        ]);
    }
}
