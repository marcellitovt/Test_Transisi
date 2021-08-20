Test Recruitment Laravel Dasar
======

### How to deploy this laravel project

 __Prerequisite :__

* Composer Latest: 2.1.5
* PHP 7.4.22 or Above
* Laravel 8.x
* mysql

__Steps :__

1. Downloand/Clone source code https://github.com/marcellitovt/Test_Transisi.git
2. Ekstrak and move to folder  </br> **company-management**
3. Create database and setup .env file
</br>
![alt text](/phpdasar_md/env.PNG "Logo Title Text 1") </br>
4. Update Composer  </br> **composer update --ignore-platform-reqs**
5. Run Migration  </br> **php artisan migrate**
6. Run Seeder   </br> **php artisan db:seed**
7. Run Development Server   </br> **php artisan serve**
8. Go to URL http://127.0.0.1:8000/

__Default Account :__

Email : admin@transisi.id </br>
Password : transisi

__Additional Feature :__</br>
API Get-Company List: http://127.0.0.1:8000/api/company </br>
API Get-Employee List: http://127.0.0.1:8000/api/employee </br>
*Note : this is read-only API, because it's not secured yet*</br>
</br>

Testing Laravel
======

1. Aplikasi memiliki proses autentikasi untuk administrator. Gunakan database seeds untuk membuat user dengan email :admin@transisi.id dan password : transisi</br>
![alt text](/phpdasar_md/laravel1.PNG "Logo Title Text 1") </br>
*script : database/seeders/DatabaseSeeder.php*</br>
You can also login with default account after you run database seeder
***

2. Aplikasi memiliki fungsionalitas CRUD untuk data companies dan employees. Gunakan Laravel Resource Controllers dengan defaultmethods. Pada companies/employees list gunakan laravel pagination, tampilkan 5 data per halaman.</br>
![alt text](/phpdasar_md/laravel2.PNG "Logo Title Text 1") </br>

You can try the CRUD Function in here http://127.0.0.1:8000/
***
3. Data companies yang disimpan adalah : Nama (wajib), email (wajib), logo (wajib, minimum 100x100 px, png, ukuran maks 2 MB),website (wajib). Simpan company logo pada folder storage/app/company. </br>
![alt text](/phpdasar_md/laravel3.PNG "Logo Title Text 1") </br>
You can find the stored image in folder *storage/app/company*
***
4. Data employees yang disimpan adalah : Nama (wajib), Company (foreign key ke company), email (wajib)</br>
![alt text](/phpdasar_md/laravel3-1.PNG "Logo Title Text 1") </br>
You can only choose inputed company names because its *foreign-key*
***
5.  Gunakan database migrations untuk membuat schema yang diperlukan</br>
![alt text](/phpdasar_md/laravel5.PNG "Logo Title Text 1") </br>
Creating *tableCompanies* using migration
***
6. Gunakan laravel validation function menggunakan Request classes, untuk proses validasi data companies & employees</br>
![alt text](/phpdasar_md/laravel6.PNG "Logo Title Text 1") </br>
To Validate input file less than 2mb 
***

7. Gunakan laravel/ui package sebagai basis user interface</br>
![alt text](/phpdasar_md/laravel7.PNG "Logo Title Text 1") </br>
Laravel/ui default style
***