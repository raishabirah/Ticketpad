# Ticketpad-Pemesanan Tiket Bioskop Online

## Anggota

<li>Afifah Nibrass (210810701001097)</li>
<li>Raihan Shabirah (2108107010001)</li>

 ### How to clone this application in your local
 <hr>
1. Clone or download this repository
<pre><code>https://github.com/raishabirah/Ticketpad.git</code></pre>
2. Rename .env.example file to .env<br>
3. Run composer install
<pre><code>composer install</code></pre>
4. Create a database in your local
<pre><code>create database ticketpad;</code></pre>
5. Setting database in .env file
<pre><code>DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=ticketpad<br>
DB_USERNAME=<your_username><br>
DB_PASSWORD=<your_password></code></pre>
6. Create midtrans account
<pre><code>https://midtrans.com/id</code></pre>
7. Copy and setting access keys in the end of .env file
<pre><code>MIDTRANS_IS_PRODUCTION=false<br>
MIDTRANS_MERCHAT_ID=xxxxxxxxxx<br>
MIDTRANS_CLIENT_KEY=SB-Mid-client-xxxxxxxxxx<br>
MIDTRANS_SERVER_KEY=SB-Mid-server-xxxxxxxxxx</code></pre>
7. Go to 21cinema-api-main and run npm install
<pre><code>npm install</code></pre>
8. Go back to Ticketpad and run php artisan migrate
<pre><code>php artisan migrate</code></pre>

### How to run this application in your local
<hr>
1. Go to 21cinema-api-main and run npm run start
<pre><code>npm run start</code></pre>
2. Go back to Ticketpad and run php artisan serve
<pre><code>php artisan serve</code></pre>
3. Go to http://localhost:8000/
