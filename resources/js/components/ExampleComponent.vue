<template>
  <v-card
    max-width="1000"
    class="mx-auto"
  >
    <v-img
      src="hh.jpg"
      height="300px"
      dark
    >
      <v-row class="fill-height">
        <v-card-title>



        </v-card-title>

        <v-spacer></v-spacer>

        <v-card-title dark class="dark--text pl-200 pt-20">
          <div class="display-1 pl-12 pt-12 "></div>
        </v-card-title>
      </v-row>
    </v-img>

    <v-list two-line>




              <v-card-title class="headline center" >
          <h1 dark class="display-2 white--text"> Bienvenue sur Esi-App     </h1>
            </v-card-title>
          <hr>
                <blockquote class="blockquote">
        &#8220;Application web de scolarité entre Etudiants, Enseignants et Administration .&#8221;
        <footer>
          <small>
            <em>&mdash;Ecole nationale supérieure d'informatique  _Esi-Alger </em>
          </small>
        </footer>
      </blockquote>

 <v-card height="50" width="400">


        <v-card-actions>
          <v-btn class="white--text"
            color="teal darken-3"
            nuxt
            to="/signup"
          >
            Inscription
          </v-btn>
<v-spacer></v-spacer>
          <v-btn class="white--text"
            color="teal darken-3"
            nuxt
            to="/inspire"
          >
            Connexion
          </v-btn>
           </v-card-actions>
         </v-card>

      <v-space></v-space>





    </v-list>
  </v-card>
</template>





  <!--  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">kk</div>

                    <div class="card-body">
                       kkkk
                    </div>
                </div>
            </div>
        </div>
    </div>
</v-card>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
