<main>
    <div class="container">
        <div :style="dischi.length != 10 ? 'display:none' : ''" class="row py-5">
                   
            <div v-for="disco in dischi" class="col-2 p-2">

                <div class="myCard p-3">
                    <img class="img-fluid mb-3" :src="disco.poster" alt="#">
                    <h4>
                      {{disco.title}}
                    </h4>
                    <p class="m-0">
                        {{disco.author}}
                    </p>
                    <p class="m-0">
                        {{disco.year}}
                    </p>
                </div>

            </div> 
                    <!-- / card -->
                
        </div>

        <div  :style="dischi.length < 10 ? 'display: block; color: white;' : 'display: none'" class="row py-5 loading">
            <h1>
                LOADING..
            </h1>
        </div>
    </div>
</main>