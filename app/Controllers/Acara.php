<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        // cara 1 : query builder
        $builder = $this->db->table('acara');
        $query   = $builder->get()->getResult();

        // cara 2 : query manual
        // $query = $this->db->query("SELECT * FROM acara");
        $data['acara'] = $query;
        return view('acara/get', $data);
    }

    public function create() {
        return view('acara/add'); // Mengembalikan ke tampilan halaman
    }

    public function store() {
        // Cara 1 : kalau name sama
        $data = $this->request->getPost();
        $this->db->table('acara')->insert($data);

        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit ($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('acara')->getWhere(['id_acara' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data); // return view Mengembalikan ke tampilan halaman, untuk site mengambil dari routes yang sudah dideklarasikan
            }else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }

        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    
    public function update($id) {

        // cara 1 : name sama
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('acara')->where(['id_acara' => $id])->update($data);
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
    }

    public function destroy($id) {
        $this->db->table('acara')->where(['id_acara' => $id])->delete();
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Dihapus');
    }
}
