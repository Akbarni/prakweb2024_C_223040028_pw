<?php
class About
{
    public function index($nama = 'Akbar Nur Iman', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama. Saya adalah $pekerjaan.";
    }
    public function page()
    {
        echo "About/page";
    }
}