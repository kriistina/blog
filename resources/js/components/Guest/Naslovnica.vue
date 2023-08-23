<template>
    <div>
        <div class="carousel-container">
            <v-carousel :interval="1000" hide-delimiters>
                <v-carousel-item
                    v-for="(item, i) in items"
                    :key="i"
                    :src="item.src"
                    cover
                >
                    <v-row class="fill-height" align="center" justify="center">
                        <div class="text-h2 text-white fw-bold" align="center">
                            PUTUJ.SANJAJ.ISTRAŽI.
                        </div>
                    </v-row>
                </v-carousel-item>
            </v-carousel>
        </div>

        <div class="container m-5 p-5 text-center fst-italic">
            <hr />
            <h1 class="m-5 text-secondary">Dobrodošli na stranicu Globus!</h1>
            <p class="lead color-black">
                Dobrodošli u svijet putovanja, gdje svaka destinacija otkriva
                svoju jedinstvenu priču i ostavlja trag u vašim srcima.Ovo je
                blog o putovanjima gdje možete otkriti prelijepe destinacije,
                nova iskustva i skrivena mjesta diljem svijeta.
                <br />
                Vežite se, polijećemo!
            </p>
            <v-btn
                color="primary"
                @click="otvori()"
                type="button"
                class="btn btn-primary"
            >
                POČNI ISTRAŽIVANJE!
            </v-btn>
        </div>
        <hr />
        <!-- Kartice -->
        <v-container>
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                    md="4"
                    v-for="(kartica, index) in kartice"
                    :key="index"
                >
                    <v-card class="mx-auto mt-10 mb-10" max-width="400">
                        <v-img :src="kartica.slikaUrl" height="250px"></v-img>

                        <v-card-title>
                            {{ kartica.naslov }}
                        </v-card-title>

                        <v-card-actions>
                            <v-btn
                                type="button"
                                class="btn btn-primary btn-lg"
                                depressed
                                color="primary"
                                @click="kartica.show = !kartica.show"
                            >
                                Saznaj više
                            </v-btn>

                            <v-spacer></v-spacer>

                            <v-btn icon @click="kartica.show = !kartica.show">
                                <v-icon>
                                    {{
                                        kartica.show
                                            ? "mdi-chevron-up"
                                            : "mdi-chevron-down"
                                    }}
                                </v-icon>
                            </v-btn>
                        </v-card-actions>

                        <v-expand-transition>
                            <div v-show="kartica.show">
                                <v-divider></v-divider>

                                <v-card-text>
                                    {{ kartica.tekst }}
                                </v-card-text>
                            </div>
                        </v-expand-transition>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
            kartice: [
                {
                    slikaUrl:
                        "https://cutewallpaper.org/21/sea-backgrounds/10x8-ft-Seamless-Blue-Sea-Photography-Background-Tropical-Beach-Backdrop-for-Summer-Wedding-Party-Ocean-Nature-Photo-Studio-Picture-Prop.jpg",
                    naslov: "Najpovoljnija ljetovanja godine",
                    tekst: "Mnoge ove destinacije su doista jeftinija opcija ljetovanja od Hrvatske i to čak kada uračunate i cijene avionske karte. Hrvatska je i dalje po nama najsigurniji i top izbor za odmor ovog ljeta, ali ove destinacije mogu pružiti isto što i Hrvatska, a koštaju manje za ljetovanje ove godine.Hrvatska je super izbor ako si možete priuštiti 500 eura po osobi za 7 dana u apartmanu ili 1000 eura po osobi za hotele, a opet morate još plaćati parking, gorivo i cestarinu. Iznos je i preko 700 € po osobi za ljetovanje, dok ove ostale destinacije nude isto to za 30% manje novca. Ukoliko vam trebaju ponude putovanja možete nam poslati poruku OVDJE.",
                    show: false,
                },
                {
                    slikaUrl:
                        "data:image/jpeg;base64,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",
                    naslov: "Najbolje aviokompanije na svijetu",
                    tekst: "Općenito cijenjene kao “Oscari zrakoplovne industrije”, dodjela World Airline Awards započela je 1999. godine i ostaje potpuno neovisna i nepristrana sa svim troškovima anketiranja kupaca i dodjelom nagrada koje plaća organizator, Skytrax.Među velikim pobjednicima na dodjeli nagrada bio je Qatar Airways koji je osvojio devet nagrada, a Singapore Airlines također je dobio devet nagrada. U Sjevernoj Americi, Delta Air Lines je bio uspješan u Sjevernoj Americi, osvojivši šest nagrada. U Europi je Turkish Airlines bio dominantan, primivši četiri nagrade, uključujući visoko konkurentnu titulu najboljeg zrakoplovnog prijevoznika u Europi.",
                    show: false,
                },
                {
                    slikaUrl:
                        "https://i0.hippopx.com/photos/106/889/188/night-train-tracks-railroad-rail-preview.jpg",
                    naslov: "Europska putovanja vlakom",
                    tekst: "Postoji li slavniji vlak od Orient Expressa? Vraćajući se u zlatno doba željeznice 1920-ih i 1930-ih, ovaj je vlak putnike vozio iz Pariza sve do Istanbula, a danas je sinonim za luksuzno putovanje vlakom. Upravo u ovaj vlak je Agatha Christie smjestila radnju svog slavnog romana, Ubojstvo u Orient Expressu, a u njemu ćete osjetiti dašak onog posebnog Art Deco glamura i elegancije zlatnog doba putovanja. S obnovljenim retro vagonima iz 20-ih godina prošlog stoljeća, elegantno uređenim kabinama i vrhunskom gastronomskom ponudom, putovanje Venice Simplon-Orient-Express vlakom nešto je što morate doživjeti ako volite luksuzna i ne tako obična putovanja. I danas jednom godišnje možete putovati po originalnoj ruti, i to po nevjerojatnoj cijeni, a karte se prodaju unaprijed. Međutim, ekstravaganciju možete isprobati i na kraćim putovanjima, recimo od Venecije do Londona.",
                    show: false,
                },
            ],

            items: [
                {
                    src: "https://e0.pxfuel.com/wallpapers/668/111/desktop-wallpaper-high-resolution-ocean.jpg",
                },
                {
                    src: "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF2870n_gal1.jpg",
                },
                {
                    src: "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF5774_gal1.jpg",
                },
            ],
        };
    },
    methods: {
        otvori() {
            window.location.href = "http://127.0.0.1:8000/blog";
        },
    },
};
</script>

<style scoped>
.carousel-container {
    display: flex;
    justify-content: center;
    width: 100%;
    overflow: hidden;
}

.overlay-text {
    justify-content: center;
    color: #fff;
    pointer-events: none;
    font-size: 50px;
}
</style>
