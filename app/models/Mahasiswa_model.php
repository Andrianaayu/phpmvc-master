<?php

class Mahasiswa_model{

	
	
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMhasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllMhasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahMahasiswa($data)
	{
		//$nim, $nama, $jurusan
		$query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES(:nim, :nama, :jurusan)";
		$this->db->query($query);
		$this->db->bind('nim',$data['nim']);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('jurusan',$data['jurusan']);
		// return $query;
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataMahasiswa($data)
	{
		// return $data;
		$query = "UPDATE mahasiswa SET nim=:nim, nama=:nama, jurusan=:jurusan WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nim',$data['nim']);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('jurusan',$data['jurusan']);
		// print_r($query);
		// return $query;
		// $this->db->bind('nim',$nim);
		// $this->db->bind('nama',$nama);
		// $this->db->bind('jurusan',$jurusan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteMhs($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}