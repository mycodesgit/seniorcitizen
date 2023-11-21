$(document).ready(function() {
    var provinceSelect = $('#provinceSelect');
    var citySelect = $('#citySelect');
    
    // Define cities/municipalities for all provinces
    var citiesByProvince = {
        'Manila': ["Binondo", "Ermita", "Intramuros", "Malate", "Paco", "Pandacan", "Port Area", "Quiapo", "Sampaloc", "San Andres", "San Miguel", "San Nicolas", "Santa Ana", "Santa Cruz", "Santa Mesa", "Tondo", "Tutuban"],
        'Quezon City': ["Alicia", "Amihan", "Aurora", "Bagong Bayan", "Bagong Lipunan", "Bagong Pag-asa", "Bagong Silangan", "Bagumbayan", "Bahay Toro", "Balingasa", "Balintawak", "Batasan Hills", "Bayanihan", "Blue Ridge", "Botocan", "Bungad", "Capri", "Central", "Claro", "Commonwealth", "Cubao", "Culiat", "Damar", "Damar, Upper", "Damayan", "Damayan Lagi", "Del Monte", "Diliman", "Duyan-Duyan", "E Rodriguez", "Escopa", "Fairview", "Galas", "Horseshoe", "Immaculate Concepcion", "Industrial Valley", "Kaingin", "Kalusugan", "Kamuning", "Kanluran", "Krus Na Ligas", "Laging Handa", "Libis", "Lourdes", "Malo", "Manresa", "Mariana", "Mariblo", "Masagana", "Matalahib", "Matandang Balara", "Milagrosa", "Nagkaisang Nayon", "Nayong Kanluran", "New Era", "Novaliches Proper", "Obogon", "Old Capitol Site", "Paang Bundok", "Pag-ibig", "Paligsahan", "Paltok", "Pansol", "Pasong Putik", "Payatas", "Phil-Am", "Philippine Heart Center", "Pinagkaisahan", "Pinagong Parang", "Pinyahan", "Project 1", "Project 2", "Project 3", "Project 4", "Project 5", "Quirino District", "Ramon Magsaysay", "Roxas District", "Sacro Cuore", "Saint Ignatius", "Saint Martin de Porres", "Saint Peter", "Salvacion", "San Agustin", "San Antonio", "San Bartolome", "San Francisco del Monte", "San Isidro", "San Isidro Labrador", "San Jose", "San Juan", "San Roque", "San Vicente", "Santo Cristo", "Santo Niño", "Santo Rosario", "Santol", "Sauyo", "Silangan", "Sikatuna Village", "Socorro", "Sikatuna Village", "South Triangle", "Tagumpay", "Teachers Village", "Unang Sigaw", "UP Campus", "U.P. Village", "Ugong Norte", "Unang Pagkakaisa", "University of the Philippines", "Valencia", "Vasra", "Veterans Village", "Villa Maria Clara", "Wawang Pulo", "White Plains"],
        'Caloocan': ["Amparo", "Bagong Barrio", "Bagong Bayan", "Bagong Silang", "Bagumbong", "Baesa", "Bagong Silang", "Balintawak", "Barrio San Jose", "Barrio San Roque", "Camarin", "Congress Village", "Deparo", "Grace Park", "Heroes del 96", "Karuhatan", "Llano", "Mabini-J. P. Rizal", "Malaria", "Maypajo", "Morning Breeze", "Pangarap Village", "Paso de Blas", "Samson Road", "Sangandaan", "Santa Quiteria", "University Hills", "Victory Heights", "Zabarte Subdivision"],
        'Makati': ["Bangkal", "Bel-Air", "Carmona", "Cembo", "Comembo", "Dasmarinas", "East Rembo", "Forbes Park", "Guadalupe Nuevo", "Guadalupe Viejo", "Kasilawan", "La Paz", "Magallanes", "Olympia", "Palanan", "Pembo", "Pinagkaisahan", "Pio del Pilar", "Pitogo", "Poblacion", "Post Proper Northside", "Post Proper Southside", "Rizal", "San Antonio", "San Isidro", "San Lorenzo", "Santa Cruz", "Singkamas", "South Cembo", "Tejeros", "Urdaneta", "Valenzuela"],
        'Taguig': ["Bagumbayan", "Bagong Tanyag", "Bagumbayan", "Bambang", "Calzada", "Central Bicutan", "Central Signal Village", "Fort Bonifacio", "Hagonoy", "Ibayo-Tipas", "Kalawaan", "Ligid-Tipas", "Lower Bicutan", "Maharlika Village", "Napindan", "New Lower Bicutan", "North Daang Hari", "North Signal Village", "Palingon", "Sampaloc", "Santa Ana", "Tuktukan", "Upper Bicutan", "Ususan", "Wawa"],

        'Baguio': ["Baguio City"],
        'Benguet': ["La Trinidad", "Itogon", "Tuba", "Tublay"],
        'Kalinga': ["Tabuk", "Balbalan", "Pinukpuk", "Rizal"],
        'Apayao': ["Kabugao", "Luna", "Conner", "Pudtol", "Flora", "Santa Marcela"],
        'Ifugao': ["Lagawe", "Kiangan", "Lamut", "Hingyon", "Tinoc", "Banaue"],
    
        'Ilocos Norte': ["Laoag", "Batac", "Dingras", "Paoay", "San Nicolas", "Sarrat"],
        'Ilocos Sur': ["Vigan", "Candon", "Bantay", "Narvacan", "Caoayan", "Santa Catalina"],
        'La Union': ["San Fernando", "Agoo", "Aringay", "Bauang", "Caba", "Santo Tomas"],
        'Pangasinan': ["Lingayen", "Dagupan", "Urdaneta", "San Carlos", "Mangaldan", "Tayug"],

        'Cagayan': ["Tuguegarao", "Aparri", "Lal-Lo", "Gattaran", "Solana", "Enrile"],
        'Isabela': ["Ilagan", "Cauayan", "Santiago", "Alicia", "Roxas", "Cauayan"],
        'Nueva Vizcaya': ["Bayombong", "Solano", "Aritao", "Dupax del Sur", "Ambaguio", "Kasibu"],
        'Quirino': ["Cabarroguis", "Diffun", "Aglipay", "Nagtipunan", "Maddela", "Saguday"],
    
        'Aurora': ["Baler", "Casiguran", "Dilasag", "Dinalungan", "Dingalan", "Dipaculao"],
        'Bataan': ["Balanga", "Dinalupihan", "Hermosa", "Limay", "Mariveles", "Morong"],
        'Bulacan': ["Malolos", "San Jose del Monte", "Meycauayan", "Marilao", "Baliuag", "Santa Maria"],
        'Nueva Ecija': ["Cabanatuan", "San Jose City", "Gapan", "Munoz", "Palayan", "Talavera"],
        'Pampanga': ["San Fernando", "Angeles", "Mabalacat", "Porac", "Arayat", "Candaba"],
        'Tarlac': ["Tarlac City", "Paniqui", "Concepcion", "Capas", "Camiling", "Tarlac"],
        'Zambales': ["Olongapo", "Subic", "Iba", "Botolan", "Masinloc", "Castillejos"],

        'Marinduque': ["Boac", "Gasan", "Mogpog", "Sta. Cruz", "Torrijos"],
        'Occidental Mindoro': ["Mamburao", "Abra de Ilog", "Calintaan", "Looc", "Lubang", "Magsaysay", "Paluan", "Rizal", "Sablayan", "San Jose"],
        'Oriental Mindoro': ["Calapan", "Baco", "Bansud", "Bongabong", "Bulalacao", "Gloria", "Mansalay", "Naujan", "Pinamalayan", "Pola", "Puerto Galera", "Roxas", "San Teodoro", "Socorro", "Victoria"],
        'Palawan': ["Puerto Princesa", "Aborlan", "Agutaya", "Araceli", "Balabac", "Bataraza", "Brooke's Point", "Busuanga", "Cagayancillo", "Coron", "Culion", "Cuyo", "Dumaran", "El Nido", "Kalayaan", "Linapacan", "Magsaysay", "Narra", "Quezon", "Rizal", "Roxas", "San Vicente", "Sofronio Española"],
        'Romblon': ["Romblon", "Cajidiocan", "Calatrava", "Concepcion", "Corcuera", "Ferrol", "Looc", "Magdiwang", "Odiongan", "Romblon", "San Agustin", "San Andres", "San Fernando", "San Jose", "Santa Fe", "Santa Maria"],

        'Albay': ["Legazpi City", "Ligao City", "Tabaco City", "Bacacay", "Camalig", "Daraga", "Guinobatan", "Jovellar", "Libon", "Malilipot", "Malinao", "Manito", "Oas", "Pio Duran", "Polangui", "Rapu-Rapu", "Santo Domingo", "Tiwi"],
        'Camarines Norte': ["Daet", "Basud", "Capalonga", "Jose Panganiban", "Labo", "Mercedes", "Paracale", "San Lorenzo Ruiz", "San Vicente", "Santa Elena", "Talisay", "Vinzons"],
        'Camarines Sur': ["Iriga City", "Naga City", "Baao", "Balatan", "Bato", "Bombon", "Buhi", "Bula", "Cabusao", "Calabanga", "Camaligan", "Canaman", "Caramoan", "Del Gallego", "Gainza", "Garchitorena", "Goa", "Lagonoy", "Libmanan", "Lupi", "Magarao", "Milaor", "Minalabac", "Nabua", "Ocampo", "Pamplona", "Pasacao", "Pili", "Presentacion", "Ragay", "Sagnay", "San Fernando", "San Jose", "Sipocot", "Siruma", "Tigaon", "Tinambac"],
        'Catanduanes': ["Virac", "Bagamanoc", "Baras", "Bato", "Caramoran", "Gigmoto", "Pandan", "Panganiban", "San Andres", "San Miguel", "Viga", "Viga", "Viga"],
        'Masbate': ["Masbate City", "Aroroy", "Baleno", "Balud", "Batuan", "Cataingan", "Cawayan", "Claveria", "Dimasalang", "Esperanza", "Mandaon", "Milagros", "Mobo", "Monreal", "Palanas", "Pio V. Corpuz", "Placer", "San Fernando", "San Jacinto", "San Pascual", "Uson"],
        'Sorsogon': ["Sorsogon City", "Barcelona", "Bulan", "Bulusan", "Casiguran", "Castilla", "Donsol", "Gubat", "Irosin", "Juban", "Magallanes", "Matnog", "Pilar", "Prieto Diaz", "Santa Magdalena"],

        'Aklan': ["Balete", "Banga", "Batan", "Buruanga", "Ibajay", "Kalibo", "Lezo", "Libacao", "Madalag", "Makato", "Malay", "Malinao", "Nabas", "New Washington", "Numancia", "Tangalan"],
        'Antique': ["Anini-y", "Barbaza", "Belison", "Bugasong", "Caluya", "Culasi", "Hamtic", "Laua-an", "Libertad", "Pandan", "Patnongon", "San Jose de Buenavista", "San Remigio", "Sebaste", "Sibalom", "Tibiao", "Tobias Fornier", "Valderrama"],
        'Capiz': ["Cuartero", "Dao", "Dumalag", "Dumarao", "Ivisan", "Jamindan", "Maayon", "Mambusao", "Panay", "Panitan", "Pilar", "Pontevedra", "President Roxas", "Roxas City", "Sapi-an", "Sigma", "Tapaz"],
        'Guimaras': ["Buenavista", "Jordan", "Nueva Valencia", "San Lorenzo", "Sibunag"],
        'Iloilo': ["Ajuy", "Alimodian", "Anilao", "Badiangan", "Balasan", "Banate", "Barotac Nuevo", "Barotac Viejo", "Batad", "Bingawan", "Cabatuan", "Calinog", "Carles", "Concepcion", "Dingle", "Dueñas", "Dumangas", "Estancia", "Guimbal", "Igbaras", "Iloilo City", "Januiay", "Lambunao", "Leganes", "Lemery", "Leon", "Maasin", "Miagao", "Mina", "New Lucena", "Oton", "Passi City", "Pavia", "Pototan", "San Dionisio", "San Enrique", "San Joaquin", "San Miguel", "Santa Barbara", "Sara", "Tigbauan", "Tubungan", "Zarraga"],
        'Negros Occidental': ["Bacolod City", "Bago City", "Binalbagan", "Calatrava", "Candoni", "Cauayan", "Enrique B. Magalona", "Escalante City", "Himamaylan City", "Hinigaran", "Hinoba-an", "Ilog", "Isabela", "Kabankalan City", "La Carlota City", "La Castellana", "Manapla", "Moises Padilla", "Murcia", "Pontevedra", "Pulupandan", "Sagay City", "Salvador Benedicto", "San Carlos City", "San Enrique", "Silay City", "Sipalay City", "Talisay City", "Toboso", "Valladolid", "Victorias City"],

        'Bohol': ["Alburquerque", "Alicia", "Anda", "Antequera", "Baclayon", "Balilihan", "Batuan", "Bien Unido", "Bilar", "Buenavista", "Calape", "Candijay", "Carmen", "Catigbian", "Clarin", "Corella", "Cortes", "Dagohoy", "Danao", "Dauis", "Dimiao", "Duero", "Garcia Hernandez", "Getafe", "Guindulman", "Inabanga", "Jagna", "Lila", "Loay", "Loboc", "Loon", "Mabini", "Maribojoc", "Panglao", "Pilar", "Pres. Carlos P. Garcia", "Sagbayan", "San Isidro", "San Miguel", "Sevilla", "Sierra Bullones", "Sikatuna", "Tagbilaran City", "Talibon", "Trinidad", "Tubigon", "Ubay", "Valencia"],
        'Cebu': ["Alcantara", "Alcoy", "Alegria", "Aloguinsan", "Argao", "Asturias", "Badian", "Balamban", "Bantayan", "Barili", "Bogo City", "Boljoon", "Borbon", "Carcar City", "Carmen", "Catmon", "Cebu City", "Compostela", "Consolacion", "Cordova", "Daanbantayan", "Dalaguete", "Danao City", "Dumanjug", "Ginatilan", "Lapu-Lapu City", "Liloan", "Madridejos", "Malabuyoc", "Mandaue City", "Medellin", "Minglanilla", "Moalboal", "Naga City", "Oslob", "Pilar", "Pinamungajan", "Poro", "Ronda", "Samboan", "San Fernando", "San Francisco", "San Remigio", "Santa Fe", "Santander", "Sibonga", "Sogod", "Tabogon", "Tabuelan", "Talisay City", "Toledo City", "Tuburan", "Tudela"],
        'Negros Oriental': ["Amlan", "Ayungon", "Bacong", "Bais City", "Basay", "Bindoy", "Canlaon City", "Dauin", "Dumaguete City", "Guihulngan City", "Jimalalud", "La Libertad", "Mabinay", "Manjuyod", "Pamplona", "San Jose", "Santa Catalina", "Siaton", "Sibulan", "Tanjay City", "Tayasan", "Valencia", "Vallehermoso", "Zamboanguita"],
        'Siquijor': ["Enrique Villanueva", "Larena", "Lazi", "Maria", "San Juan", "Siquijor"],

        'Biliran': ["Almeria", "Biliran", "Cabucgayan", "Caibiran", "Culaba", "Kawayan", "Maripipi", "Naval"],
        'Eastern Samar': ["Arteche", "Balangiga", "Balangkayan", "Borongan", "Can-avid", "Dolores", "General MacArthur", "Giporlos", "Guiuan", "Hernani", "Jipapad", "Lawaan", "Llorente", "Maslog", "Maydolong", "Mercedes", "Oras", "Quinapondan", "Salcedo", "San Julian", "San Policarpo", "Sulat", "Taft"],
        'Leyte': ["Abuyog", "Alangalang", "Albuera", "Babatngon", "Barugo", "Bato", "Burauen", "Calubian", "Capoocan", "Carigara", "Dagami", "Dulag", "Hilongos", "Hindang", "Inopacan", "Isabel", "Jaro", "Javier", "Julita", "Kananga", "La Paz", "Leyte", "MacArthur", "Mahaplag", "Matag-ob", "Matalom", "Mayorga", "Merida", "Ormoc City", "Palo", "Palompon", "Pastrana", "San Isidro", "San Miguel", "Santa Fe", "Tabango", "Tabontabon", "Tacloban City", "Tanauan", "Tolosa", "Tunga", "Villaba"],
        'Northern Samar': ["Allen", "Biri", "Bobon", "Capul", "Catarman", "Catubig", "Gamay", "Laoang", "Lapinig", "Las Navas", "Lavezares", "Lope de Vega", "Mapanas", "Mondragon", "Palapag", "Pambujan", "Rosario", "San Antonio", "San Isidro", "San Jose", "San Roque", "San Vicente", "Silvino Lobos", "Victoria"],
        'Samar': ["Almagro", "Basey", "Calbayog City", "Calbiga", "Catbalogan City", "Daram", "Gandara", "Hinabangan", "Jiabong", "Marabut", "Matuguinao", "Motiong", "Pagsanghan", "Paranas", "Pinabacdao", "San Jorge", "San Jose de Buan", "San Sebastian", "Santa Margarita", "Santa Rita", "Santo Niño", "Tagapul-an", "Talalora", "Tarangnan", "Villareal", "Zumarraga"],
        'Southern Leyte': ["Anahawan", "Bontoc", "Hinunangan", "Hinundayan", "Libagon", "Liloan", "Limasawa", "Maasin City", "Macrohon", "Malitbog", "Padre Burgos", "Pintuyan", "Saint Bernard", "San Francisco", "San Juan", "San Ricardo", "Silago", "Sogod"],

        'Zamboanga City': ["Ayer", "Baluno", "Boalan", "Bolong", "Cabaluay", "Calaanan", "Camino Nuevo", "Campo Islam", "Canelar", "Cawit", "Dita", "Divisoria", "Guiwan", "Kasanyangan", "La Paz", "Labuan", "Lamisahan", "Landang Gua", "Landang Laum", "Lanzones", "Licomo", "Limaong", "Limpapa", "Mampang", "Manalipa", "Manicahan", "Mariki", "Mercedes", "Pamucutan", "Panubigan", "Pasilmanta", "Pasonanca", "Putik", "Quiniput", "Recodo", "Rio Hondo", "San Jose Cawa-Cawa", "San Jose Gusu", "San Roque", "San Roque", "Sangali", "Santa Barbara", "Santa Catalina", "Santa Maria", "Santo Niño", "Santo Rosario", "Sinubong", "Tagasilay", "Talisayan", "Talon-Talon", "Taluksangay", "Tetuan", "Tictapul", "Tugbungan", "Tumaga", "Tumalutab", "Vitali", "Zambowood"],
        'Zamboanga del Norte': ["Baliguian", "Godod", "Gutalac", "Jose Dalman", "Kalawit", "Katipunan", "La Libertad", "Labason", "Leon B. Postigo", "Liloy", "Manukan", "Mutia", "Pinan", "Polanco", "President Manuel A. Roxas", "Rizal", "Salug", "Sergio Osmeña Sr.", "Siayan", "Sibuco", "Sibutad", "Sindangan", "Siocon", "Sirawai", "Tampilisan"],
        'Zamboanga del Sur': ["Aurora", "Bayog", "Dimataling", "Dinas", "Dumalinao", "Dumingag", "Guipos", "Josefina", "Kumalarang", "Labangan", "Lakewood", "Lapuyan", "Mahayag", "Margosatubig", "Midsalip", "Molave", "Pagadian City", "Pitogo", "Ramon Magsaysay", "San Miguel", "San Pablo", "Sominot", "Tabina", "Tambulig", "Tigbao", "Tukuran", "Vincenzo A. Sagun"],
        'Zamboanga Sibugay': ["Alicia", "Buug", "Diplahan", "Imelda", "Ipil", "Kabasalan", "Mabuhay", "Malangas", "Naga", "Olutanga", "Payao", "Roseller Lim", "Siay", "Talusan", "Titay", "Tungawan"],

        'Bukidnon': ["Baungon", "Cabanglasan", "Damulog", "Dangcagan", "Don Carlos", "Impasug-ong", "Kadingilan", "Kalilangan", "Kibawe", "Kitaotao", "Lantapan", "Libona", "Malaybalay City", "Manolo Fortich", "Maramag", "Pangantucan", "Quezon", "San Fernando", "Sumilao", "Talakag", "Valencia City"],
        'Camiguin': ["Catarman", "Guinsiliban", "Mahinog", "Mambajao", "Sagay"],
        'Lanao del Norte': ["Bacolod", "Baloi", "Baroy", "Iligan City", "Kapatagan", "Kauswagan", "Kolambugan", "Lala", "Linamon", "Magsaysay", "Maigo", "Matungao", "Munai", "Nunungan", "Pantao Ragat", "Pantar", "Poona Piagapo", "Salvador", "Sapad", "Sultan Naga Dimaporo", "Tagoloan", "Tangcal", "Tubod"],
        'Misamis Occidental': ["Aloran", "Baliangao", "Ballesteros", "Bonifacio", "Calamba", "Concepcion", "Jimenez", "Lopez Jaena", "Oroquieta City", "Ozamiz City", "Panaon", "Plaridel", "Sapang Dalaga", "Sinacaban", "Tangub City", "Tudela"],
        'Misamis Oriental': ["Alubijid", "Balingasag", "Balingoan", "Binuangan", "Cagayan de Oro City", "Claveria", "El Salvador City", "Gingoog City", "Gitagum", "Initao", "Jasaan", "Kinoguitan", "Lagonglong", "Laguindingan", "Libertad", "Lugait", "Magsaysay", "Manticao", "Medina", "Naawan", "Opol", "Salay", "Sugbongcogon", "Tagoloan", "Talisayan", "Villanueva"],

        'Compostela Valley': ["Compostela", "Laak", "Mabini", "Maco", "Maragusan", "Mawab", "Monkayo", "Montevista", "Nabunturan", "New Bataan", "Pantukan"],
        'Davao del Norte': ["Asuncion", "Braulio E. Dujali", "Carmen", "Kapalong", "New Corella", "Panabo City", "Samal City", "San Isidro", "Santo Tomas", "Tagum City", "Talaingod"],
        'Davao del Sur': ["Bansalan", "Davao City", "Digos City", "Hagonoy", "Kiblawan", "Magsaysay", "Malalag", "Matanao", "Padada", "Santa Cruz", "Santa Maria", "Sulop"],
        'Davao Occidental': ["Don Marcelino", "Jose Abad Santos", "Malita", "Santa Maria", "Sarangani"],
        'Davao Oriental': ["Baganga", "Banaybanay", "Boston", "Caraga", "Cateel", "Governor Generoso", "Lupon", "Manay", "Mati City", "San Isidro", "Tarragona"],

        'Cotabato': ["Alamada", "Aleosan", "Antipas", "Arakan", "Banisilan", "Carmen", "Kabacan", "Libungan", "M'lang", "Magpet", "Makilala", "Matalam", "Midsayap", "Pigcawayan", "Pikit", "President Roxas", "Tulunan"],
        'Sarangani': ["Alabel", "Glan", "Kiamba", "Maasim", "Maitum", "Malapatan"],
        'South Cotabato': ["Banga", "General Santos City", "Koronadal City", "Lake Sebu", "Norala", "Polomolok", "Santo Niño", "Surallah", "T'boli", "Tampakan", "Tantangan", "Tupi"],
        'Sultan Kudarat': ["Bagumbayan", "Columbio", "Esperanza", "Isulan", "Kalamansig", "Lambayong", "Lebak", "Lutayan", "Palimbang", "President Quirino"],

        'Agusan del Norte': ["Buenavista", "Cabadbaran", "Carmen", "Jabonga", "Kitcharao", "Las Nieves", "Magallanes", "Nasipit", "Remedios T. Romualdez", "Santiago", "Tubay"],
        'Agusan del Sur': ["Bayugan", "Bunawan", "Esperanza", "La Paz", "Loreto", "Prosperidad", "Rosario", "San Francisco", "San Luis", "Santa Josefa", "Sibagat", "Talacogon", "Trento", "Veruela"],
        'Dinagat Islands': ["Basilisa", "Cagdianao", "Dinagat", "Loreto", "San Jose", "Tubajon"],
        'Surigao del Norte': ["Alegria", "Bacuag", "Burgos", "Claver", "Dapa", "Del Carmen", "General Luna", "Gigaquit", "Mainit", "Malimono", "Pilar", "Placer", "San Benito", "San Francisco", "San Isidro", "Santa Monica", "Sison", "Socorro", "Surigao City", "Tagana-an", "Tubod"],
        'Surigao del Sur': ["Barobo", "Bayabas", "Bislig", "Cagwait", "Cantilan", "Carmen", "Carrascal", "Cortes", "Hinatuan", "Lanuza", "Lianga", "Lingig", "Madrid", "Marihatag", "San Agustin", "San Miguel", "Tagbina", "Tago", "Tandag"],

        'Basilan': ["Akbar", "Al-Barka", "Hadhji Mohammad Ajul", "Hadji Muhtamad", "Isabela City", "Lamitan", "Lantawan", "Maluso", "Sumisip", "Tabuan-Lasa", "Tipo-Tipo", "Tuburan", "Ungkaya Pukan"],
        'Lanao del Sur': ["Bacolod-Kalawi", "Balabagan", "Balindong", "Bayang", "Binidayan", "Buadiposo-Buntong", "Bubong", "Butig", "Calanogas", "Ditsaan-Ramain", "Ganassi", "Kapai", "Kapatagan", "Lumbaca-Unayan", "Lumbatan", "Lumbayanague", "Madalum", "Madamba", "Maguing", "Malabang", "Marantao", "Marogong", "Masiu", "Mulondo", "Pagayawan", "Piagapo", "Poona Bayabao", "Pualas", "Saguiaran", "Sultan Dumalondong", "Picong", "Tagoloan", "Tamparan", "Taraka", "Tubaran", "Tugaya", "Wao"],
        'Maguindanao': ["Ampatuan", "Barira", "Buldon", "Datu Abdullah Sangki", "Datu Anggal Midtimbang", "Datu Blah T. Sinsuat", "Datu Hoffer Ampatuan", "Datu Montawal", "Datu Odin Sinsuat", "Datu Paglas", "Datu Piang", "Datu Salibo", "Datu Saudi-Ampatuan", "Datu Unsay", "General Salipada K. Pendatun", "Guindulungan", "Kabuntalan", "Mamasapano", "Mangudadatu", "Pagagawan", "Pagalungan", "Paglat", "Pandag", "Pikit", "Rajah Buayan", "Shariff Aguak", "Shariff Saydona Mustapha", "South Upi", "Sultan Kudarat", "Sultan Mastura", "Sultan Sa Barongis", "Sultan Sumagka", "Talayan", "Talitay", "Upi"],
        'Sulu': ["Hadji Panglima Tahil", "Indanan", "Jolo", "Kalingalan Caluang", "Lugus", "Luuk", "Maimbung", "Old Panamao", "Omar", "Pandami", "Panglima Estino", "Pangutaran", "Parang", "Pata", "Patikul", "Siasi", "Talipao", "Tapul", "Tongkil"],
        'Tawi-Tawi': ["Bongao", "Languyan", "Mapun", "Panglima Sugala", "Sapa-Sapa", "Sibutu", "Simunul", "Sitangkai", "South Ubian", "Tandubas", "Turtle Islands"],
        
    };

    // Handle region selection
    $('#regionSelect').on('change', function() {
        var selectedRegion = $(this).val();
        provinceSelect.empty();
        citySelect.empty();

        if (selectedRegion === 'NCR') {
            // Provinces in NCR
            var ncrProvinces = ["Manila", "Quezon City", "Caloocan", "Makati", "Taguig"];
            provinceSelect.append('<option value="">Select Province</option>');
            populateOptions(provinceSelect, ncrProvinces);
        } else if (selectedRegion === 'CAR') {
            // Provinces in CAR
            var carProvinces = ["Baguio", "Benguet", "Kalinga", "Apayao", "Ifugao"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < carProvinces.length; i++) {
                provinceSelect.append('<option value="' + carProvinces[i] + '">' + carProvinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region1') {
            // Provinces in Region I
            var region1Provinces = ["Ilocos Norte", "Ilocos Sur", "La Union", "Pangasinan"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region1Provinces.length; i++) {
                provinceSelect.append('<option value="' + region1Provinces[i] + '">' + region1Provinces[i] + '</option>');
            }
        }else if (selectedRegion === 'Region2') {
            // Provinces in Region II
            var region2Provinces = ["Cagayan", "Isabela", "Nueva Vizcaya", "Quirino"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region2Provinces.length; i++) {
                provinceSelect.append('<option value="' + region2Provinces[i] + '">' + region2Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region3') {
            // Provinces in Region III
            var region3Provinces = ["Aurora", "Bataan", "Bulacan", "Nueva Ecija", "Pampanga", "Tarlac", "Zambales"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region3Provinces.length; i++) {
                provinceSelect.append('<option value="' + region3Provinces[i] + '">' + region3Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region4A') {
            // Provinces in Region IV-A
            var region4AProvinces = ["Aurora", "Batangas", "Cavite", "Laguna", "Quezon", "Rizal"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region4AProvinces.length; i++) {
                provinceSelect.append('<option value="' + region4AProvinces[i] + '">' + region4AProvinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region4B') {
            // Provinces in Region IV-B
            var region4BProvinces = ["Marinduque", "Occidental Mindoro", "Oriental Mindoro", "Palawan", "Romblon"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region4BProvinces.length; i++) {
                provinceSelect.append('<option value="' + region4BProvinces[i] + '">' + region4BProvinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region5') {
            // Provinces in Region V
            var region5Provinces = ["Albay", "Camarines Norte", "Camarines Sur", "Catanduanes", "Masbate", "Sorsogon"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region5Provinces.length; i++) {
                provinceSelect.append('<option value="' + region5Provinces[i] + '">' + region5Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region6') {
            // Provinces in Region VI
            var region6Provinces = ["Aklan", "Antique", "Capiz", "Guimaras", "Iloilo", "Negros Occidental"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region6Provinces.length; i++) {
                provinceSelect.append('<option value="' + region6Provinces[i] + '">' + region6Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region7') {
            // Provinces in Region VII
            var region7Provinces = ["Bohol", "Cebu", "Negros Oriental", "Siquijor"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region7Provinces.length; i++) {
                provinceSelect.append('<option value="' + region7Provinces[i] + '">' + region7Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region8') {
            // Provinces in Region VIII
            var region8Provinces = ["Biliran", "Eastern Samar", "Leyte", "Northern Samar", "Samar", "Southern Leyte"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region8Provinces.length; i++) {
                provinceSelect.append('<option value="' + region8Provinces[i] + '">' + region8Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region9') {
            // Provinces in Region IX
            var region9Provinces = ["Zamboanga City", "Zamboanga del Norte", "Zamboanga del Sur", "Zamboanga Sibugay"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region9Provinces.length; i++) {
                provinceSelect.append('<option value="' + region9Provinces[i] + '">' + region9Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region10') {
            // Provinces in Region X
            var region10Provinces = ["Bukidnon", "Camiguin", "Lanao del Norte", "Misamis Occidental", "Misamis Oriental"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region10Provinces.length; i++) {
                provinceSelect.append('<option value="' + region10Provinces[i] + '">' + region10Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region11') {
            // Provinces in Region XI
            var region11Provinces = ["Compostela Valley", "Davao del Norte", "Davao del Sur", "Davao Occidental", "Davao Oriental"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region11Provinces.length; i++) {
                provinceSelect.append('<option value="' + region11Provinces[i] + '">' + region11Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region12') {
            // Provinces in Region XII
            var region12Provinces = ["Cotabato", "Sarangani", "South Cotabato", "Sultan Kudarat"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region12Provinces.length; i++) {
                provinceSelect.append('<option value="' + region12Provinces[i] + '">' + region12Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'Region13') {
            // Provinces in Region XIII (Caraga)
            var region13Provinces = ["Agusan del Norte", "Agusan del Sur", "Dinagat Islands", "Surigao del Norte", "Surigao del Sur"];
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < region13Provinces.length; i++) {
                provinceSelect.append('<option value="' + region13Provinces[i] + '">' + region13Provinces[i] + '</option>');
            }
        } else if (selectedRegion === 'BARMM') {
            // Provinces in BARMM
            var barmmProvinces = ["Basilan", "Lanao del Sur", "Maguindanao", "Sulu", "Tawi-Tawi"];
            provinceSelect.append('<option value="">Select Province</option>');
            provinceSelect.append('<option value="">Select Province</option>');
            for (var i = 0; i < barmmProvinces.length; i++) {
                provinceSelect.append('<option value="' + barmmProvinces[i] + '">' + barmmProvinces[i] + '</option>');
            }
        }
        // Add similar blocks for other regions and provinces
        
        // Populate province and city options
        provinceSelect.on('change', function() {
            var selectedProvince = $(this).val();
            citySelect.empty();

            // Populate cities/municipalities based on the selected province
            if (selectedProvince in citiesByProvince) {
                var cities = citiesByProvince[selectedProvince];
                populateOptions(citySelect, cities);
            }
        });
    });
    
    // Function to populate select options
    function populateOptions(selectElement, options) {
        selectElement.empty();
        selectElement.append('<option value="">Select City/Municipality</option>');
        for (var i = 0; i < options.length; i++) {
            selectElement.append('<option value="' + options[i] + '">' + options[i] + '</option>');
        }
    }
});