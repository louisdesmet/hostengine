<?php

use Illuminate\Database\Seeder;

use App\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        Product::insert([
            ['image' => 'img/office365.png', 'name'=>'Office 365 Personal', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 365 Home', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 2019 Home & Student', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 2019 Home & Business', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 2016 Home & Student', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 2016 Home & Business', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 365', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Managed Office 365', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Microsoft 365', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 365 Education', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            //['image' => 'img/office365.png', 'name'=>'Skype for Business', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            //['image' => 'img/office365.png', 'name'=>'One Drive for Business', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            //['image' => 'img/office365.png', 'name'=>'Microsoft Visio', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            //['image' => 'img/office365.png', 'name'=>'Microsoft Intune', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            //['image' => 'img/office365.png', 'name'=>'Microsoft Project', 'category_id' => 1,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Nomadesk', 'category_id' => 2,'vendor_id' => 4, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Cloudhighway Back-up', 'category_id' => 2,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Acronis True Image Subscription incl.250 GB Cloud Storage, 1 year', 'category_id' => 2,'vendor_id' => 2, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Acronis True Image Premium Subscription incl. 1TB Cloud Storage, 1 year', 'category_id' => 2,'vendor_id' => 2, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Acronis True Image 2018', 'category_id' => 2,'vendor_id' => 2, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Gdata Antivirus business', 'category_id' => 3,'vendor_id' => 6, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Gdata Antivirus consumer', 'category_id' => 3,'vendor_id' => 6, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Gdata Client Security', 'category_id' => 3,'vendor_id' => 6, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Gdata Endpoint Protection', 'category_id' => 3,'vendor_id' => 6, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Gdata Internet Security', 'category_id' => 3,'vendor_id' => 6, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Gdata Total Protection', 'category_id' => 3,'vendor_id' => 6, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Bullguard Antivirus', 'category_id' => 3,'vendor_id' => 5, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Bullguard Internet Security', 'category_id' => 3,'vendor_id' => 5, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'DV: Positive SSL Wildcard (Comodo)', 'category_id' => 3,'vendor_id' => 7, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'DV: Essential SSL (Comodo)', 'category_id' => 3,'vendor_id' => 7, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'DV: ssl123 (Thawte)', 'category_id' => 3,'vendor_id' => 8, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'SkyHi Flex', 'category_id' => 4,'vendor_id' => 3, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Cloud Server', 'category_id' => 5,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Webhosting Performance', 'category_id' => 6,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Website Builder: Nanosite', 'category_id' => 6,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Website Builder: Maxisite', 'category_id' => 6,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Flexishop', 'category_id' => 6,'vendor_id' => 10, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Registreer domein', 'category_id' => 6,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Domein verhuizen', 'category_id' => 6,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'N-Able Starter Pack', 'category_id' => 7,'vendor_id' => 11, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'N-Able Licensed', 'category_id' => 7,'vendor_id' => 11, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'N-Able Trial', 'category_id' => 7,'vendor_id' => 11, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Hyperdesk Trial', 'category_id' => 7,'vendor_id' => 12, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Remote Intervention', 'category_id' => 8,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'On Site Intervention', 'category_id' => 8,'vendor_id' => 9, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Office 365 Initiële Configuratie', 'category_id' => 9,'vendor_id' => 1, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['image' => 'img/office365.png', 'name'=>'Nomadesk Initiële Configuratie', 'category_id' => 9,'vendor_id' => 4, 'brand_id' => 1, 'created_at' => $now, 'updated_at' => $now]
        ]);
        Product::where('id', 1)->update(['description' => '<p>Eén oplossing op al je apparaten. Inclusief premium Office-toepassingen voor één gebruiker: Word, Excel, Powerpoint, Outlook, Onenote, Access, Publisher + 1 TB Onedrive opslag.</p><p>Abonnement voor 1 jaar.</p><p>Niet voor commercieel gebruik.</p>']);
        Product::where('id', 2)->update(['description' => '<p>Eén oplossing voor je gezin op al je apparaten. Inclusief premium Office-toepassingen voor maximaal zes gebruikers: Word, Excel, Powerpoint, Outlook, Onenote, Access, Publisher + 1 TB Onedrive opslag per persoon.</p><p>Abonnement voor 1 jaar.</p><p>Niet voor commercieel gebruik.</p>']);
        Product::where('id', 3)->update(['description' => '<p>Eénmalige aankoop voor één apparaat (PKC / ESD)</p><p>Incl. Word, Excel, Powerpoint, One Note</p><p>Voor thuisgebruik</p>']);
        Product::where('id', 4)->update(['description' => '<p>Eénmalige aankoop voor één apparaat (PKC / ESD)</p><p>Incl. Word, Excel, Powerpoint, One Note</p><p>Voor thuisgebruik</p>']);
        Product::where('id', 5)->update(['description' => '<p>Maak je computer compleet met Microsoft Office Thuisgebruik en Studenten NL. Met dit pakket beschik je over de nieuwste versies van Word, Excel, Powerpoint en OneNote. Je installeert het op 1 computer of laptop. Dit betekent dat het pakket geschikt is voor 1 gebruiker. Dit pakket bevat een permanente licentie voor Windows.</p><p>Eénmalige aankoop voor één apparaat (PKC / ESD)</p><p>Incl. Word, Excel, Powerpoint, One Note</p><p>Voor thuisgebruik</p>']);
        Product::where('id', 6)->update(['description' => '<p>Kies voor een complete werkplek met de licentie Microsoft office Thuisgebruik en Zelfstandigen NL. Met dit pakket beschik je over de nieuwste versies van Word, Excel, Powerpoint, OneNote en Outlook. Bewerk bestanden vanaf je computer, of benader ze online via OneDrive. De licentie installeer je op 1 computer of laptop. Daardoor is dit pakket geschikt voor 1 Windows gebruiker.</p><p>Eénmalige aankoop voor één apparaat (PKC / ESD)</p><p>Incl. Word, Excel, Powerpoint, One Note, Outlook</p><p>Voor thuisgebruik</p>']);
        Product::where('id', 13)->update(['description' => '<p>Acronis true image laat u toe om gemakkelijk en automatisch backups te maken van uw harde schijf en deze ook en ook gemakkelijk uw verloren data te herstellen.</p><p>Beveiliging tegen ransomware</p><p>Bewaar al uw data veilig online</p><p>Gebruiksvriendelijke grafische interface</p><p>Een jaar lang 250 GB Cloud Storage</p>']);
        Product::where('id', 14)->update(['description' => '<p>Acronis true image laat u toe om gemakkelijk en automatisch backups te maken van uw harde schijf en deze ook en ook gemakkelijk uw verloren data te herstellen.</p><p>Beveiliging tegen ransomware</p><p>Bewaar al uw data veilig online</p><p>Gebruiksvriendelijke grafische interface</p><p>Een jaar lang 1 TB Cloud Storage</p>']);
        Product::where('id', 15)->update(['description' => '<p>Acronis true image laat u toe om gemakkelijk en automatisch backups te maken van uw harde schijf en deze ook en ook gemakkelijk uw verloren data te herstellen.</p><p>Beveiliging tegen ransomware</p><p>Bewaar al uw data veilig online</p><p>Gebruiksvriendelijke grafische interface</p>']);
        Product::where('id', 22)->update(['description' => '<p>BullGuard Antivirus is een toonaangevend en bekroond beschermingspakket dat bij onafhankelijke testlaboratoria consistent hoge ogen gooit voor de beste resultaten in de detectie van malware.</p><p>Met meerdere beschermingslagen voor de meest efficiënte onderschepping van virussen</p><p>De functie voor veilig browsen detecteert schadelijke code en phishingaanvallen</p><p>Snelle en krachtige scans die je zelf kunt aanpassen</p><p>Antispambescherming</p>']);
        Product::where('id', 23)->update(['description' => '<p>Krachtige online bescherming die keer op keer als de beste uit tests komt - nu voor meerder platforms</p><p>Bescherming voor pc\'s, Macs en Android apparaten met slechts één licentie</p><p>Robuuste firewall die indringers buiten houdt en je beschermt tegen netwerkaanvallen</p><p>Betrouwbare, meerlaagse bescherming tegen alle soorten virussen, spyware, malware en andere online dreigingen</p><p>Krachtige functies voor ouderlijk toezicht om je kinderen tegen cyberpesten en criminelen te beschermen</p>']);
    }
}
