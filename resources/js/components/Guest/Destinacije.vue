<template>
    <div>
        <div class="carousel-container">
            <v-carousel :interval="1000" hide-delimiters :show-arrows="false">
                <v-carousel-item
                    v-for="(item, i) in items"
                    :key="i"
                    :src="item.src"
                    cover
                >
                </v-carousel-item>
            </v-carousel>
        </div>
        <br /><br /><br />
        <h1 class="m-3 p-3 text-center bold inner-tit">EUROPA</h1>
        <hr />

        <div>
            <v-row>
                <v-col cols="12" sm="6" md="4" v-for="i in europa" :key="i">
                    <v-card class="mx-auto m-5" max-width="400">
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            :src="i.imgPath"
                        >
                        </v-img>
                        <v-card-title>{{ i.name }}</v-card-title>
                    </v-card>
                </v-col>
            </v-row>
            <hr />
        </div>
        <h1 class="m-3 p-3 text-center bold inner-tit">AMERIKA</h1>
        <hr />
        <div>
            <v-row>
                <v-col cols="12" sm="6" md="4" v-for="i in amerika" :key="i">
                    <v-card class="mx-auto m-5" max-width="400">
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            :src="i.imgPath"
                        >
                        </v-img>
                        <v-card-title>{{ i.name }}</v-card-title>
                    </v-card>
                </v-col>
            </v-row>
            <hr />
        </div>
        <h1 class="m-3 p-3 text-center bold inner-tit">AZIJA</h1>
        <hr />
        <div>
            <v-row>
                <v-col cols="12" sm="6" md="4" v-for="i in azija" :key="i">
                    <v-card class="mx-auto m-5" max-width="400">
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            :src="i.imgPath"
                        >
                        </v-img>
                        <v-card-title>{{ i.name }}</v-card-title>
                    </v-card>
                </v-col>
            </v-row>
            <hr />
        </div>
        <h1 class="m-3 p-3 text-center bold inner-tit">BLISKI ISTOK</h1>
        <hr />
        <div>
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                    md="4"
                    v-for="i in bliskiistok"
                    :key="i"
                >
                    <v-card class="mx-auto m-5" max-width="400">
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            :src="i.imgPath"
                        >
                        </v-img>
                        <v-card-title>{{ i.name }}</v-card-title>
                    </v-card>
                </v-col>
            </v-row>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {
                    src: "https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHJhdmVsJTIwbmF0dXJlfGVufDB8fDB8fHww&w=1000&q=80",
                },
            ],
            europa: [
                {
                    name: "Grčka",
                    imgPath:
                        "https://www.mondotravel.hr/assets/images/9d/9dbbbe_SANTORINI-18-1.jpg",
                },
                {
                    name: "Turska",
                    imgPath:
                        "https://www.palma-travel.hr/wp-content/uploads/2018/06/istanbul_palma_travel12-1024x660.jpg",
                },
                {
                    name: "Island",
                    imgPath:
                        "https://i0.hippopx.com/photos/593/406/557/iceland-horses-herd-animals-preview.jpg",
                },
            ],
            amerika: [
                {
                    name: "Mexico",
                    imgPath:
                        "https://data.atomiyme.com/image/12d31c86471c0e0d.jpg",
                },
                {
                    name: "Brazil",
                    imgPath:
                        "https://res.cloudinary.com/natasamedvesek-photograpy/images/w_800,h_530,c_scale/f_auto,q_auto/v1649235363/slapovi-244/slapovi-244.jpg?_i=AA",
                },
                {
                    name: "Argentina",
                    imgPath:
                        "https://www.mzv.cz/public/1f/9f/39/422717_271019_ID27_parque_nacional_iguazu_48a99c2408e2d.jpg",
                },
            ],
            azija: [
                {
                    name: "Tajland",
                    imgPath:
                        "https://putovanja.nomago.hr/wp-content/uploads/2022/03/bangkok-tajland-putovanje-2.jpg",
                },
                {
                    name: "Japan",
                    imgPath:
                        "https://storage.googleapis.com/pod_public/1300/122765.jpg",
                },
                {
                    name: "Indonezija",
                    imgPath:
                        "https://podravkaiovariations.blob.core.windows.net/e47b721e-631e-11eb-94d1-0242ac12005f/v/f2b1f6a6-64bc-11eb-b6c2-0242ac130010/1024x768-f2b21802-64bc-11eb-a115-0242ac130010.webp",
                },
            ],
            bliskiistok: [
                {
                    name: "Egipat",
                    imgPath:
                        "https://www.palma-travel.hr/wp-content/uploads/2018/07/egipt-3-1024x736.jpg",
                },
                {
                    name: "Jordan",
                    imgPath:
                        "https://www.sportiputovanja.hr/wp-content/uploads/2022/08/petra-ad-deir.jpg",
                },
                {
                    name: "Emirati",
                    imgPath:
                        "https://lp-cms-production.imgix.net/features/2019/04/sheikh-zayed-grand-mosque-abu-dhabi-c4c65f3749b0.jpg",
                },
            ],
        };
    },
};
</script>
