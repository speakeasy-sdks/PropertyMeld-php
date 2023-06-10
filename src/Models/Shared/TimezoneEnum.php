<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


enum TimezoneEnum: string
{
    case AfricaAbidjan = 'Africa/Abidjan';
    case AfricaAccra = 'Africa/Accra';
    case AfricaAddisAbaba = 'Africa/Addis_Ababa';
    case AfricaAlgiers = 'Africa/Algiers';
    case AfricaAsmara = 'Africa/Asmara';
    case AfricaAsmera = 'Africa/Asmera';
    case AfricaBamako = 'Africa/Bamako';
    case AfricaBangui = 'Africa/Bangui';
    case AfricaBanjul = 'Africa/Banjul';
    case AfricaBissau = 'Africa/Bissau';
    case AfricaBlantyre = 'Africa/Blantyre';
    case AfricaBrazzaville = 'Africa/Brazzaville';
    case AfricaBujumbura = 'Africa/Bujumbura';
    case AfricaCairo = 'Africa/Cairo';
    case AfricaCasablanca = 'Africa/Casablanca';
    case AfricaCeuta = 'Africa/Ceuta';
    case AfricaConakry = 'Africa/Conakry';
    case AfricaDakar = 'Africa/Dakar';
    case AfricaDarEsSalaam = 'Africa/Dar_es_Salaam';
    case AfricaDjibouti = 'Africa/Djibouti';
    case AfricaDouala = 'Africa/Douala';
    case AfricaElAaiun = 'Africa/El_Aaiun';
    case AfricaFreetown = 'Africa/Freetown';
    case AfricaGaborone = 'Africa/Gaborone';
    case AfricaHarare = 'Africa/Harare';
    case AfricaJohannesburg = 'Africa/Johannesburg';
    case AfricaJuba = 'Africa/Juba';
    case AfricaKampala = 'Africa/Kampala';
    case AfricaKhartoum = 'Africa/Khartoum';
    case AfricaKigali = 'Africa/Kigali';
    case AfricaKinshasa = 'Africa/Kinshasa';
    case AfricaLagos = 'Africa/Lagos';
    case AfricaLibreville = 'Africa/Libreville';
    case AfricaLome = 'Africa/Lome';
    case AfricaLuanda = 'Africa/Luanda';
    case AfricaLubumbashi = 'Africa/Lubumbashi';
    case AfricaLusaka = 'Africa/Lusaka';
    case AfricaMalabo = 'Africa/Malabo';
    case AfricaMaputo = 'Africa/Maputo';
    case AfricaMaseru = 'Africa/Maseru';
    case AfricaMbabane = 'Africa/Mbabane';
    case AfricaMogadishu = 'Africa/Mogadishu';
    case AfricaMonrovia = 'Africa/Monrovia';
    case AfricaNairobi = 'Africa/Nairobi';
    case AfricaNdjamena = 'Africa/Ndjamena';
    case AfricaNiamey = 'Africa/Niamey';
    case AfricaNouakchott = 'Africa/Nouakchott';
    case AfricaOuagadougou = 'Africa/Ouagadougou';
    case AfricaPortoNovo = 'Africa/Porto-Novo';
    case AfricaSaoTome = 'Africa/Sao_Tome';
    case AfricaTimbuktu = 'Africa/Timbuktu';
    case AfricaTripoli = 'Africa/Tripoli';
    case AfricaTunis = 'Africa/Tunis';
    case AfricaWindhoek = 'Africa/Windhoek';
    case AmericaAdak = 'America/Adak';
    case AmericaAnchorage = 'America/Anchorage';
    case AmericaAnguilla = 'America/Anguilla';
    case AmericaAntigua = 'America/Antigua';
    case AmericaAraguaina = 'America/Araguaina';
    case AmericaArgentinaBuenosAires = 'America/Argentina/Buenos_Aires';
    case AmericaArgentinaCatamarca = 'America/Argentina/Catamarca';
    case AmericaArgentinaComodRivadavia = 'America/Argentina/ComodRivadavia';
    case AmericaArgentinaCordoba = 'America/Argentina/Cordoba';
    case AmericaArgentinaJujuy = 'America/Argentina/Jujuy';
    case AmericaArgentinaLaRioja = 'America/Argentina/La_Rioja';
    case AmericaArgentinaMendoza = 'America/Argentina/Mendoza';
    case AmericaArgentinaRioGallegos = 'America/Argentina/Rio_Gallegos';
    case AmericaArgentinaSalta = 'America/Argentina/Salta';
    case AmericaArgentinaSanJuan = 'America/Argentina/San_Juan';
    case AmericaArgentinaSanLuis = 'America/Argentina/San_Luis';
    case AmericaArgentinaTucuman = 'America/Argentina/Tucuman';
    case AmericaArgentinaUshuaia = 'America/Argentina/Ushuaia';
    case AmericaAruba = 'America/Aruba';
    case AmericaAsuncion = 'America/Asuncion';
    case AmericaAtikokan = 'America/Atikokan';
    case AmericaAtka = 'America/Atka';
    case AmericaBahia = 'America/Bahia';
    case AmericaBahiaBanderas = 'America/Bahia_Banderas';
    case AmericaBarbados = 'America/Barbados';
    case AmericaBelem = 'America/Belem';
    case AmericaBelize = 'America/Belize';
    case AmericaBlancSablon = 'America/Blanc-Sablon';
    case AmericaBoaVista = 'America/Boa_Vista';
    case AmericaBogota = 'America/Bogota';
    case AmericaBoise = 'America/Boise';
    case AmericaBuenosAires = 'America/Buenos_Aires';
    case AmericaCambridgeBay = 'America/Cambridge_Bay';
    case AmericaCampoGrande = 'America/Campo_Grande';
    case AmericaCancun = 'America/Cancun';
    case AmericaCaracas = 'America/Caracas';
    case AmericaCatamarca = 'America/Catamarca';
    case AmericaCayenne = 'America/Cayenne';
    case AmericaCayman = 'America/Cayman';
    case AmericaChicago = 'America/Chicago';
    case AmericaChihuahua = 'America/Chihuahua';
    case AmericaCoralHarbour = 'America/Coral_Harbour';
    case AmericaCordoba = 'America/Cordoba';
    case AmericaCostaRica = 'America/Costa_Rica';
    case AmericaCreston = 'America/Creston';
    case AmericaCuiaba = 'America/Cuiaba';
    case AmericaCuracao = 'America/Curacao';
    case AmericaDanmarkshavn = 'America/Danmarkshavn';
    case AmericaDawson = 'America/Dawson';
    case AmericaDawsonCreek = 'America/Dawson_Creek';
    case AmericaDenver = 'America/Denver';
    case AmericaDetroit = 'America/Detroit';
    case AmericaDominica = 'America/Dominica';
    case AmericaEdmonton = 'America/Edmonton';
    case AmericaEirunepe = 'America/Eirunepe';
    case AmericaElSalvador = 'America/El_Salvador';
    case AmericaEnsenada = 'America/Ensenada';
    case AmericaFortNelson = 'America/Fort_Nelson';
    case AmericaFortWayne = 'America/Fort_Wayne';
    case AmericaFortaleza = 'America/Fortaleza';
    case AmericaGlaceBay = 'America/Glace_Bay';
    case AmericaGodthab = 'America/Godthab';
    case AmericaGooseBay = 'America/Goose_Bay';
    case AmericaGrandTurk = 'America/Grand_Turk';
    case AmericaGrenada = 'America/Grenada';
    case AmericaGuadeloupe = 'America/Guadeloupe';
    case AmericaGuatemala = 'America/Guatemala';
    case AmericaGuayaquil = 'America/Guayaquil';
    case AmericaGuyana = 'America/Guyana';
    case AmericaHalifax = 'America/Halifax';
    case AmericaHavana = 'America/Havana';
    case AmericaHermosillo = 'America/Hermosillo';
    case AmericaIndianaIndianapolis = 'America/Indiana/Indianapolis';
    case AmericaIndianaKnox = 'America/Indiana/Knox';
    case AmericaIndianaMarengo = 'America/Indiana/Marengo';
    case AmericaIndianaPetersburg = 'America/Indiana/Petersburg';
    case AmericaIndianaTellCity = 'America/Indiana/Tell_City';
    case AmericaIndianaVevay = 'America/Indiana/Vevay';
    case AmericaIndianaVincennes = 'America/Indiana/Vincennes';
    case AmericaIndianaWinamac = 'America/Indiana/Winamac';
    case AmericaIndianapolis = 'America/Indianapolis';
    case AmericaInuvik = 'America/Inuvik';
    case AmericaIqaluit = 'America/Iqaluit';
    case AmericaJamaica = 'America/Jamaica';
    case AmericaJujuy = 'America/Jujuy';
    case AmericaJuneau = 'America/Juneau';
    case AmericaKentuckyLouisville = 'America/Kentucky/Louisville';
    case AmericaKentuckyMonticello = 'America/Kentucky/Monticello';
    case AmericaKnoxIN = 'America/Knox_IN';
    case AmericaKralendijk = 'America/Kralendijk';
    case AmericaLaPaz = 'America/La_Paz';
    case AmericaLima = 'America/Lima';
    case AmericaLosAngeles = 'America/Los_Angeles';
    case AmericaLouisville = 'America/Louisville';
    case AmericaLowerPrinces = 'America/Lower_Princes';
    case AmericaMaceio = 'America/Maceio';
    case AmericaManagua = 'America/Managua';
    case AmericaManaus = 'America/Manaus';
    case AmericaMarigot = 'America/Marigot';
    case AmericaMartinique = 'America/Martinique';
    case AmericaMatamoros = 'America/Matamoros';
    case AmericaMazatlan = 'America/Mazatlan';
    case AmericaMendoza = 'America/Mendoza';
    case AmericaMenominee = 'America/Menominee';
    case AmericaMerida = 'America/Merida';
    case AmericaMetlakatla = 'America/Metlakatla';
    case AmericaMexicoCity = 'America/Mexico_City';
    case AmericaMiquelon = 'America/Miquelon';
    case AmericaMoncton = 'America/Moncton';
    case AmericaMonterrey = 'America/Monterrey';
    case AmericaMontevideo = 'America/Montevideo';
    case AmericaMontreal = 'America/Montreal';
    case AmericaMontserrat = 'America/Montserrat';
    case AmericaNassau = 'America/Nassau';
    case AmericaNewYork = 'America/New_York';
    case AmericaNipigon = 'America/Nipigon';
    case AmericaNome = 'America/Nome';
    case AmericaNoronha = 'America/Noronha';
    case AmericaNorthDakotaBeulah = 'America/North_Dakota/Beulah';
    case AmericaNorthDakotaCenter = 'America/North_Dakota/Center';
    case AmericaNorthDakotaNewSalem = 'America/North_Dakota/New_Salem';
    case AmericaNuuk = 'America/Nuuk';
    case AmericaOjinaga = 'America/Ojinaga';
    case AmericaPanama = 'America/Panama';
    case AmericaPangnirtung = 'America/Pangnirtung';
    case AmericaParamaribo = 'America/Paramaribo';
    case AmericaPhoenix = 'America/Phoenix';
    case AmericaPortAuPrince = 'America/Port-au-Prince';
    case AmericaPortOfSpain = 'America/Port_of_Spain';
    case AmericaPortoAcre = 'America/Porto_Acre';
    case AmericaPortoVelho = 'America/Porto_Velho';
    case AmericaPuertoRico = 'America/Puerto_Rico';
    case AmericaPuntaArenas = 'America/Punta_Arenas';
    case AmericaRainyRiver = 'America/Rainy_River';
    case AmericaRankinInlet = 'America/Rankin_Inlet';
    case AmericaRecife = 'America/Recife';
    case AmericaRegina = 'America/Regina';
    case AmericaResolute = 'America/Resolute';
    case AmericaRioBranco = 'America/Rio_Branco';
    case AmericaRosario = 'America/Rosario';
    case AmericaSantaIsabel = 'America/Santa_Isabel';
    case AmericaSantarem = 'America/Santarem';
    case AmericaSantiago = 'America/Santiago';
    case AmericaSantoDomingo = 'America/Santo_Domingo';
    case AmericaSaoPaulo = 'America/Sao_Paulo';
    case AmericaScoresbysund = 'America/Scoresbysund';
    case AmericaShiprock = 'America/Shiprock';
    case AmericaSitka = 'America/Sitka';
    case AmericaStBarthelemy = 'America/St_Barthelemy';
    case AmericaStJohns = 'America/St_Johns';
    case AmericaStKitts = 'America/St_Kitts';
    case AmericaStLucia = 'America/St_Lucia';
    case AmericaStThomas = 'America/St_Thomas';
    case AmericaStVincent = 'America/St_Vincent';
    case AmericaSwiftCurrent = 'America/Swift_Current';
    case AmericaTegucigalpa = 'America/Tegucigalpa';
    case AmericaThule = 'America/Thule';
    case AmericaThunderBay = 'America/Thunder_Bay';
    case AmericaTijuana = 'America/Tijuana';
    case AmericaToronto = 'America/Toronto';
    case AmericaTortola = 'America/Tortola';
    case AmericaVancouver = 'America/Vancouver';
    case AmericaVirgin = 'America/Virgin';
    case AmericaWhitehorse = 'America/Whitehorse';
    case AmericaWinnipeg = 'America/Winnipeg';
    case AmericaYakutat = 'America/Yakutat';
    case AmericaYellowknife = 'America/Yellowknife';
    case AntarcticaCasey = 'Antarctica/Casey';
    case AntarcticaDavis = 'Antarctica/Davis';
    case AntarcticaDumontDUrville = 'Antarctica/DumontDUrville';
    case AntarcticaMacquarie = 'Antarctica/Macquarie';
    case AntarcticaMawson = 'Antarctica/Mawson';
    case AntarcticaMcMurdo = 'Antarctica/McMurdo';
    case AntarcticaPalmer = 'Antarctica/Palmer';
    case AntarcticaRothera = 'Antarctica/Rothera';
    case AntarcticaSouthPole = 'Antarctica/South_Pole';
    case AntarcticaSyowa = 'Antarctica/Syowa';
    case AntarcticaTroll = 'Antarctica/Troll';
    case AntarcticaVostok = 'Antarctica/Vostok';
    case ArcticLongyearbyen = 'Arctic/Longyearbyen';
    case AsiaAden = 'Asia/Aden';
    case AsiaAlmaty = 'Asia/Almaty';
    case AsiaAmman = 'Asia/Amman';
    case AsiaAnadyr = 'Asia/Anadyr';
    case AsiaAqtau = 'Asia/Aqtau';
    case AsiaAqtobe = 'Asia/Aqtobe';
    case AsiaAshgabat = 'Asia/Ashgabat';
    case AsiaAshkhabad = 'Asia/Ashkhabad';
    case AsiaAtyrau = 'Asia/Atyrau';
    case AsiaBaghdad = 'Asia/Baghdad';
    case AsiaBahrain = 'Asia/Bahrain';
    case AsiaBaku = 'Asia/Baku';
    case AsiaBangkok = 'Asia/Bangkok';
    case AsiaBarnaul = 'Asia/Barnaul';
    case AsiaBeirut = 'Asia/Beirut';
    case AsiaBishkek = 'Asia/Bishkek';
    case AsiaBrunei = 'Asia/Brunei';
    case AsiaCalcutta = 'Asia/Calcutta';
    case AsiaChita = 'Asia/Chita';
    case AsiaChoibalsan = 'Asia/Choibalsan';
    case AsiaChongqing = 'Asia/Chongqing';
    case AsiaChungking = 'Asia/Chungking';
    case AsiaColombo = 'Asia/Colombo';
    case AsiaDacca = 'Asia/Dacca';
    case AsiaDamascus = 'Asia/Damascus';
    case AsiaDhaka = 'Asia/Dhaka';
    case AsiaDili = 'Asia/Dili';
    case AsiaDubai = 'Asia/Dubai';
    case AsiaDushanbe = 'Asia/Dushanbe';
    case AsiaFamagusta = 'Asia/Famagusta';
    case AsiaGaza = 'Asia/Gaza';
    case AsiaHarbin = 'Asia/Harbin';
    case AsiaHebron = 'Asia/Hebron';
    case AsiaHoChiMinh = 'Asia/Ho_Chi_Minh';
    case AsiaHongKong = 'Asia/Hong_Kong';
    case AsiaHovd = 'Asia/Hovd';
    case AsiaIrkutsk = 'Asia/Irkutsk';
    case AsiaIstanbul = 'Asia/Istanbul';
    case AsiaJakarta = 'Asia/Jakarta';
    case AsiaJayapura = 'Asia/Jayapura';
    case AsiaJerusalem = 'Asia/Jerusalem';
    case AsiaKabul = 'Asia/Kabul';
    case AsiaKamchatka = 'Asia/Kamchatka';
    case AsiaKarachi = 'Asia/Karachi';
    case AsiaKashgar = 'Asia/Kashgar';
    case AsiaKathmandu = 'Asia/Kathmandu';
    case AsiaKatmandu = 'Asia/Katmandu';
    case AsiaKhandyga = 'Asia/Khandyga';
    case AsiaKolkata = 'Asia/Kolkata';
    case AsiaKrasnoyarsk = 'Asia/Krasnoyarsk';
    case AsiaKualaLumpur = 'Asia/Kuala_Lumpur';
    case AsiaKuching = 'Asia/Kuching';
    case AsiaKuwait = 'Asia/Kuwait';
    case AsiaMacao = 'Asia/Macao';
    case AsiaMacau = 'Asia/Macau';
    case AsiaMagadan = 'Asia/Magadan';
    case AsiaMakassar = 'Asia/Makassar';
    case AsiaManila = 'Asia/Manila';
    case AsiaMuscat = 'Asia/Muscat';
    case AsiaNicosia = 'Asia/Nicosia';
    case AsiaNovokuznetsk = 'Asia/Novokuznetsk';
    case AsiaNovosibirsk = 'Asia/Novosibirsk';
    case AsiaOmsk = 'Asia/Omsk';
    case AsiaOral = 'Asia/Oral';
    case AsiaPhnomPenh = 'Asia/Phnom_Penh';
    case AsiaPontianak = 'Asia/Pontianak';
    case AsiaPyongyang = 'Asia/Pyongyang';
    case AsiaQatar = 'Asia/Qatar';
    case AsiaQostanay = 'Asia/Qostanay';
    case AsiaQyzylorda = 'Asia/Qyzylorda';
    case AsiaRangoon = 'Asia/Rangoon';
    case AsiaRiyadh = 'Asia/Riyadh';
    case AsiaSaigon = 'Asia/Saigon';
    case AsiaSakhalin = 'Asia/Sakhalin';
    case AsiaSamarkand = 'Asia/Samarkand';
    case AsiaSeoul = 'Asia/Seoul';
    case AsiaShanghai = 'Asia/Shanghai';
    case AsiaSingapore = 'Asia/Singapore';
    case AsiaSrednekolymsk = 'Asia/Srednekolymsk';
    case AsiaTaipei = 'Asia/Taipei';
    case AsiaTashkent = 'Asia/Tashkent';
    case AsiaTbilisi = 'Asia/Tbilisi';
    case AsiaTehran = 'Asia/Tehran';
    case AsiaTelAviv = 'Asia/Tel_Aviv';
    case AsiaThimbu = 'Asia/Thimbu';
    case AsiaThimphu = 'Asia/Thimphu';
    case AsiaTokyo = 'Asia/Tokyo';
    case AsiaTomsk = 'Asia/Tomsk';
    case AsiaUjungPandang = 'Asia/Ujung_Pandang';
    case AsiaUlaanbaatar = 'Asia/Ulaanbaatar';
    case AsiaUlanBator = 'Asia/Ulan_Bator';
    case AsiaUrumqi = 'Asia/Urumqi';
    case AsiaUstNera = 'Asia/Ust-Nera';
    case AsiaVientiane = 'Asia/Vientiane';
    case AsiaVladivostok = 'Asia/Vladivostok';
    case AsiaYakutsk = 'Asia/Yakutsk';
    case AsiaYangon = 'Asia/Yangon';
    case AsiaYekaterinburg = 'Asia/Yekaterinburg';
    case AsiaYerevan = 'Asia/Yerevan';
    case AtlanticAzores = 'Atlantic/Azores';
    case AtlanticBermuda = 'Atlantic/Bermuda';
    case AtlanticCanary = 'Atlantic/Canary';
    case AtlanticCapeVerde = 'Atlantic/Cape_Verde';
    case AtlanticFaeroe = 'Atlantic/Faeroe';
    case AtlanticFaroe = 'Atlantic/Faroe';
    case AtlanticJanMayen = 'Atlantic/Jan_Mayen';
    case AtlanticMadeira = 'Atlantic/Madeira';
    case AtlanticReykjavik = 'Atlantic/Reykjavik';
    case AtlanticSouthGeorgia = 'Atlantic/South_Georgia';
    case AtlanticStHelena = 'Atlantic/St_Helena';
    case AtlanticStanley = 'Atlantic/Stanley';
    case AustraliaACT = 'Australia/ACT';
    case AustraliaAdelaide = 'Australia/Adelaide';
    case AustraliaBrisbane = 'Australia/Brisbane';
    case AustraliaBrokenHill = 'Australia/Broken_Hill';
    case AustraliaCanberra = 'Australia/Canberra';
    case AustraliaCurrie = 'Australia/Currie';
    case AustraliaDarwin = 'Australia/Darwin';
    case AustraliaEucla = 'Australia/Eucla';
    case AustraliaHobart = 'Australia/Hobart';
    case AustraliaLHI = 'Australia/LHI';
    case AustraliaLindeman = 'Australia/Lindeman';
    case AustraliaLordHowe = 'Australia/Lord_Howe';
    case AustraliaMelbourne = 'Australia/Melbourne';
    case AustraliaNSW = 'Australia/NSW';
    case AustraliaNorth = 'Australia/North';
    case AustraliaPerth = 'Australia/Perth';
    case AustraliaQueensland = 'Australia/Queensland';
    case AustraliaSouth = 'Australia/South';
    case AustraliaSydney = 'Australia/Sydney';
    case AustraliaTasmania = 'Australia/Tasmania';
    case AustraliaVictoria = 'Australia/Victoria';
    case AustraliaWest = 'Australia/West';
    case AustraliaYancowinna = 'Australia/Yancowinna';
    case BrazilAcre = 'Brazil/Acre';
    case BrazilDeNoronha = 'Brazil/DeNoronha';
    case BrazilEast = 'Brazil/East';
    case BrazilWest = 'Brazil/West';
    case Cet = 'CET';
    case Cst6Cdt = 'CST6CDT';
    case CanadaAtlantic = 'Canada/Atlantic';
    case CanadaCentral = 'Canada/Central';
    case CanadaEastern = 'Canada/Eastern';
    case CanadaMountain = 'Canada/Mountain';
    case CanadaNewfoundland = 'Canada/Newfoundland';
    case CanadaPacific = 'Canada/Pacific';
    case CanadaSaskatchewan = 'Canada/Saskatchewan';
    case CanadaYukon = 'Canada/Yukon';
    case ChileContinental = 'Chile/Continental';
    case ChileEasterIsland = 'Chile/EasterIsland';
    case Cuba = 'Cuba';
    case Eet = 'EET';
    case Est = 'EST';
    case Est5Edt = 'EST5EDT';
    case Egypt = 'Egypt';
    case Eire = 'Eire';
    case EtcGMT = 'Etc/GMT';
    case EtcGMTPlus0 = 'Etc/GMT+0';
    case EtcGMTPlus1 = 'Etc/GMT+1';
    case EtcGMTPlus10 = 'Etc/GMT+10';
    case EtcGMTPlus11 = 'Etc/GMT+11';
    case EtcGMTPlus12 = 'Etc/GMT+12';
    case EtcGMTPlus2 = 'Etc/GMT+2';
    case EtcGMTPlus3 = 'Etc/GMT+3';
    case EtcGMTPlus4 = 'Etc/GMT+4';
    case EtcGMTPlus5 = 'Etc/GMT+5';
    case EtcGMTPlus6 = 'Etc/GMT+6';
    case EtcGMTPlus7 = 'Etc/GMT+7';
    case EtcGMTPlus8 = 'Etc/GMT+8';
    case EtcGMTPlus9 = 'Etc/GMT+9';
    case EtcGMT0 = 'Etc/GMT-0';
    case EtcGMT1 = 'Etc/GMT-1';
    case EtcGMT10 = 'Etc/GMT-10';
    case EtcGMT11 = 'Etc/GMT-11';
    case EtcGMT12 = 'Etc/GMT-12';
    case EtcGMT13 = 'Etc/GMT-13';
    case EtcGMT14 = 'Etc/GMT-14';
    case EtcGMT2 = 'Etc/GMT-2';
    case EtcGMT3 = 'Etc/GMT-3';
    case EtcGMT4 = 'Etc/GMT-4';
    case EtcGMT5 = 'Etc/GMT-5';
    case EtcGMT6 = 'Etc/GMT-6';
    case EtcGMT7 = 'Etc/GMT-7';
    case EtcGMT8 = 'Etc/GMT-8';
    case EtcGMT9 = 'Etc/GMT-9';
    case EtcGreenwich = 'Etc/Greenwich';
    case EtcUCT = 'Etc/UCT';
    case EtcUTC = 'Etc/UTC';
    case EtcUniversal = 'Etc/Universal';
    case EtcZulu = 'Etc/Zulu';
    case EuropeAmsterdam = 'Europe/Amsterdam';
    case EuropeAndorra = 'Europe/Andorra';
    case EuropeAstrakhan = 'Europe/Astrakhan';
    case EuropeAthens = 'Europe/Athens';
    case EuropeBelfast = 'Europe/Belfast';
    case EuropeBelgrade = 'Europe/Belgrade';
    case EuropeBerlin = 'Europe/Berlin';
    case EuropeBratislava = 'Europe/Bratislava';
    case EuropeBrussels = 'Europe/Brussels';
    case EuropeBucharest = 'Europe/Bucharest';
    case EuropeBudapest = 'Europe/Budapest';
    case EuropeBusingen = 'Europe/Busingen';
    case EuropeChisinau = 'Europe/Chisinau';
    case EuropeCopenhagen = 'Europe/Copenhagen';
    case EuropeDublin = 'Europe/Dublin';
    case EuropeGibraltar = 'Europe/Gibraltar';
    case EuropeGuernsey = 'Europe/Guernsey';
    case EuropeHelsinki = 'Europe/Helsinki';
    case EuropeIsleOfMan = 'Europe/Isle_of_Man';
    case EuropeIstanbul = 'Europe/Istanbul';
    case EuropeJersey = 'Europe/Jersey';
    case EuropeKaliningrad = 'Europe/Kaliningrad';
    case EuropeKiev = 'Europe/Kiev';
    case EuropeKirov = 'Europe/Kirov';
    case EuropeLisbon = 'Europe/Lisbon';
    case EuropeLjubljana = 'Europe/Ljubljana';
    case EuropeLondon = 'Europe/London';
    case EuropeLuxembourg = 'Europe/Luxembourg';
    case EuropeMadrid = 'Europe/Madrid';
    case EuropeMalta = 'Europe/Malta';
    case EuropeMariehamn = 'Europe/Mariehamn';
    case EuropeMinsk = 'Europe/Minsk';
    case EuropeMonaco = 'Europe/Monaco';
    case EuropeMoscow = 'Europe/Moscow';
    case EuropeNicosia = 'Europe/Nicosia';
    case EuropeOslo = 'Europe/Oslo';
    case EuropeParis = 'Europe/Paris';
    case EuropePodgorica = 'Europe/Podgorica';
    case EuropePrague = 'Europe/Prague';
    case EuropeRiga = 'Europe/Riga';
    case EuropeRome = 'Europe/Rome';
    case EuropeSamara = 'Europe/Samara';
    case EuropeSanMarino = 'Europe/San_Marino';
    case EuropeSarajevo = 'Europe/Sarajevo';
    case EuropeSaratov = 'Europe/Saratov';
    case EuropeSimferopol = 'Europe/Simferopol';
    case EuropeSkopje = 'Europe/Skopje';
    case EuropeSofia = 'Europe/Sofia';
    case EuropeStockholm = 'Europe/Stockholm';
    case EuropeTallinn = 'Europe/Tallinn';
    case EuropeTirane = 'Europe/Tirane';
    case EuropeTiraspol = 'Europe/Tiraspol';
    case EuropeUlyanovsk = 'Europe/Ulyanovsk';
    case EuropeUzhgorod = 'Europe/Uzhgorod';
    case EuropeVaduz = 'Europe/Vaduz';
    case EuropeVatican = 'Europe/Vatican';
    case EuropeVienna = 'Europe/Vienna';
    case EuropeVilnius = 'Europe/Vilnius';
    case EuropeVolgograd = 'Europe/Volgograd';
    case EuropeWarsaw = 'Europe/Warsaw';
    case EuropeZagreb = 'Europe/Zagreb';
    case EuropeZaporozhye = 'Europe/Zaporozhye';
    case EuropeZurich = 'Europe/Zurich';
    case Gb = 'GB';
    case GBEire = 'GB-Eire';
    case Gmt = 'GMT';
    case GMTPlus0 = 'GMT+0';
    case Gmt0 = 'GMT-0';
    case Greenwich = 'Greenwich';
    case Hst = 'HST';
    case Hongkong = 'Hongkong';
    case Iceland = 'Iceland';
    case IndianAntananarivo = 'Indian/Antananarivo';
    case IndianChagos = 'Indian/Chagos';
    case IndianChristmas = 'Indian/Christmas';
    case IndianCocos = 'Indian/Cocos';
    case IndianComoro = 'Indian/Comoro';
    case IndianKerguelen = 'Indian/Kerguelen';
    case IndianMahe = 'Indian/Mahe';
    case IndianMaldives = 'Indian/Maldives';
    case IndianMauritius = 'Indian/Mauritius';
    case IndianMayotte = 'Indian/Mayotte';
    case IndianReunion = 'Indian/Reunion';
    case Iran = 'Iran';
    case Israel = 'Israel';
    case Jamaica = 'Jamaica';
    case Japan = 'Japan';
    case Kwajalein = 'Kwajalein';
    case Libya = 'Libya';
    case Met = 'MET';
    case Mst = 'MST';
    case Mst7Mdt = 'MST7MDT';
    case MexicoBajaNorte = 'Mexico/BajaNorte';
    case MexicoBajaSur = 'Mexico/BajaSur';
    case MexicoGeneral = 'Mexico/General';
    case Nz = 'NZ';
    case NzChat = 'NZ-CHAT';
    case Navajo = 'Navajo';
    case Prc = 'PRC';
    case Pst8Pdt = 'PST8PDT';
    case PacificApia = 'Pacific/Apia';
    case PacificAuckland = 'Pacific/Auckland';
    case PacificBougainville = 'Pacific/Bougainville';
    case PacificChatham = 'Pacific/Chatham';
    case PacificChuuk = 'Pacific/Chuuk';
    case PacificEaster = 'Pacific/Easter';
    case PacificEfate = 'Pacific/Efate';
    case PacificEnderbury = 'Pacific/Enderbury';
    case PacificFakaofo = 'Pacific/Fakaofo';
    case PacificFiji = 'Pacific/Fiji';
    case PacificFunafuti = 'Pacific/Funafuti';
    case PacificGalapagos = 'Pacific/Galapagos';
    case PacificGambier = 'Pacific/Gambier';
    case PacificGuadalcanal = 'Pacific/Guadalcanal';
    case PacificGuam = 'Pacific/Guam';
    case PacificHonolulu = 'Pacific/Honolulu';
    case PacificJohnston = 'Pacific/Johnston';
    case PacificKanton = 'Pacific/Kanton';
    case PacificKiritimati = 'Pacific/Kiritimati';
    case PacificKosrae = 'Pacific/Kosrae';
    case PacificKwajalein = 'Pacific/Kwajalein';
    case PacificMajuro = 'Pacific/Majuro';
    case PacificMarquesas = 'Pacific/Marquesas';
    case PacificMidway = 'Pacific/Midway';
    case PacificNauru = 'Pacific/Nauru';
    case PacificNiue = 'Pacific/Niue';
    case PacificNorfolk = 'Pacific/Norfolk';
    case PacificNoumea = 'Pacific/Noumea';
    case PacificPagoPago = 'Pacific/Pago_Pago';
    case PacificPalau = 'Pacific/Palau';
    case PacificPitcairn = 'Pacific/Pitcairn';
    case PacificPohnpei = 'Pacific/Pohnpei';
    case PacificPonape = 'Pacific/Ponape';
    case PacificPortMoresby = 'Pacific/Port_Moresby';
    case PacificRarotonga = 'Pacific/Rarotonga';
    case PacificSaipan = 'Pacific/Saipan';
    case PacificSamoa = 'Pacific/Samoa';
    case PacificTahiti = 'Pacific/Tahiti';
    case PacificTarawa = 'Pacific/Tarawa';
    case PacificTongatapu = 'Pacific/Tongatapu';
    case PacificTruk = 'Pacific/Truk';
    case PacificWake = 'Pacific/Wake';
    case PacificWallis = 'Pacific/Wallis';
    case PacificYap = 'Pacific/Yap';
    case Poland = 'Poland';
    case Portugal = 'Portugal';
    case Roc = 'ROC';
    case Rok = 'ROK';
    case Singapore = 'Singapore';
    case Turkey = 'Turkey';
    case Uct = 'UCT';
    case USAlaska = 'US/Alaska';
    case USAleutian = 'US/Aleutian';
    case USArizona = 'US/Arizona';
    case USCentral = 'US/Central';
    case USEastIndiana = 'US/East-Indiana';
    case USEastern = 'US/Eastern';
    case USHawaii = 'US/Hawaii';
    case USIndianaStarke = 'US/Indiana-Starke';
    case USMichigan = 'US/Michigan';
    case USMountain = 'US/Mountain';
    case USPacific = 'US/Pacific';
    case USSamoa = 'US/Samoa';
    case Utc = 'UTC';
    case Universal = 'Universal';
    case WSu = 'W-SU';
    case Wet = 'WET';
    case Zulu = 'Zulu';
}
