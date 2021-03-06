<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;
// use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;

class Loket extends BaseController
{
  public function __construct()
  {
    $this->AntrianModel = new AntrianModel();
    $this->PelayananModel = new PelayananModel();
    $this->LoketModel = new LoketModel;
  }

  public function index($id)
  {
    $q = $this->request;
    $data = 
    [
      'title' => 'Admin',
      'loket' => $this->LoketModel->index($id)
    ];
    return view('/loket/index', $data);
  }

  public function pelayanan_loket()
  {
    $data['pelayanan'] = $this->PelayananModel->getAll();
    return view('/loket/pelayanan_loket', $data);
  }

  public function simpan()
  {
    $nama = $this->request->getVar('nama');
    $pelayanan = $this->request->getVar('pelayanan_id');
    $data = [
      'nama' => $nama,
      'pelayanan_id' => $pelayanan
    ];
    $this->LoketModel->save($data);
    return redirect()->to('/index');
  }

  public function delete($id)
  {
    $this->AntrianModel->delete($id);
    return redirect()->to('/loket/index');
  }

  // public function panggil($id)
  // {
  //   $data = [
  //     'title' => 'form ambil loket',
  //     'pelayanan' => $this->PelayananModel->getAll($id)
  //   ];
  //   return view('/loket/ambil_loket', $data);
  // }

  public function panggil($id)
  {
    session();
    $data = [
      'title' => 'Selamat Datang di Ruang Tunggu Antrian Mohon Untuk Selalu Menjaga Kebersihan',
      'validation' => \Config\Services::validation(),
      'pelayanan' => $this->PelayananModel->getAll($id)
    ];

    $data['antrian'] = $this->AntrianModel->getAll();
    return view('/loket/ambil_loket', $data);
  }

  public function save()
  {
    $data = [
      'pelayanan_id' => $this->request->getPost('pelayanan_id'),
      'nama' => $this->request->getPost('nama')
    ];

    // dd($data);
    $this->LoketModel->save($data);
    return redirect()->to('/loket/index');
    return view('/loket/ambil_loket', $data);
  }
}
