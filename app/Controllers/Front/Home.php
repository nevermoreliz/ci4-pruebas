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
        
        // $seccion = $this->request->getGet('seccion');
        // $contenido = view('Front/Home', []);
        // return $this->response->setJSON([
        //     'seccion' => $seccion,
        //     'contenido' => $contenido
        // ]);
        $titleHeadPage = 'RI - Dashboard';
        $html = view('Front/Home');
           return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'title'=> $titleHeadPage
        ]);
    }

    public function uno()
    {
        $titleHeadPage = 'RI - Convenios Nacionales';
        $html = view('Front/Pagina1', []);
           return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'title'=> $titleHeadPage
        ]);
    }

    public function dos()
    {
        $titleHeadPage = 'RI - Convenios Internacionales';
        $html = view('Front/Pagina2', []);
          return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'title'=> $titleHeadPage
        ]);
    }

    public function tres()
    {
        
        $titleHeadPage = 'RI - Mobilidad, Becas';
        $html = view('Front/Pagina3', [],['saveData' => false]);
        return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'title'=> $titleHeadPage
        ]);
    }
}
