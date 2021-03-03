SELECT mhs_nama.tb_mahasiswa, mk_nama.tb_matakuliah, MAX(nilai.tb_mahasiswa_nilai) from tb_mahasiswa_nilai
INNERJOIN tb_mahasiswa on mhs_id.tb_mahasiswa = mhs_id.tb_mahasiswa_nilai
INNERJOIN tb_matakuliah on mk_id.tb_matakuliah = mk_id.tb_mahasiswa_nilai
