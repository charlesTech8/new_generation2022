<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewGeneration</title>
  </head>

  <body>

    <div class="bg-white">
      <div class="pt-6">
        <nav aria-label="Breadcrumb">
          <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
            <li>
              <div class="flex items-center">
                <a href="#" class="mr-2 text-sm font-medium text-gray-900">
                  Form
                </a>
                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                  <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                </svg>
              </div>
            </li>

            <li>
              <div class="flex items-center">
                <a href="#" class="mr-2 text-sm font-medium text-gray-900">
                  Produit
                </a>
                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                  <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                </svg>
              </div>
            </li>

            <li class="text-sm">
              <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
                New-Add
              </a>
            </li>
          </ol>
        </nav>

        <div class="lg:container lg:mx-auto">
          <form method="post" action="">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 pb-5">
              Ajout de produit
            </h2>
            <div class="flex items-center border-b border-teal-500 py-2">
              <input type="hidden" name="add_produit">
              <input name="nomProduit" class="appearance-none bg-transparent border-none w-full text-gray-700 text-4xl mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Saisir le nom de l'article" aria-label="name">
            </div>
            <div class="py-2">
              <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 mt-5">
                  <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Produit</h3>
                    <p class="mt-1 text-sm text-gray-600">
                      Ajouter les informations du produit
                    </p>
                  </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                  <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                      <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                          CODE CATEGORIE
                        </label>
                        <div class="mt-1">
                          <input name="codeCategorie" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text" placeholder="Code catégorie">
                        </div>
                      </div>

                      <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            PRIX UNITAIRE
                          </label>
                          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="prixUnitaire" type="number" placeholder="Prix Unitaire">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            PRIX PROMO
                          </label>
                          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="prixPromo" type="number" placeholder="Prix Promo">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            QUANTITE EN STOCK
                          </label>
                          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="qteStock" type="number" placeholder="Qté en Stock">
                        </div>
                      </div>

                      <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                          DETAILS
                        </label>
                        <div class="mt-1">
                          <textarea name="detailsProduit" rows="10" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Saisir les détails du produit ..."></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                          Toutes les informations sur votre produit
                        </p>
                      </div>

                      <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Produit photo
                        </label>
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" aria-describedby="user_avatar_help" name="imgProduit" type="file">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="hidden sm:block" aria-hidden="true">
              <div class="py-5">
                <div class="border-t border-gray-200"></div>
              </div>
            </div>
            <div class="mt-10 sm:mt-0">
              <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 mt-5">
                  <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personnalisation du produit</h3>
                    <p class="mt-1 text-sm text-gray-600">
                      Cocher les cases pour lesquelles le produit sera modifiable
                    </p>
                  </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 bg-white space-y-6 sm:p-6">
                      <fieldset>
                        <div class="mt-4 space-y-4">
                          <p class="text-gray-500">NB: Si votre produit est modifiable sur un critère, <br>
                          cochez la case et mettez les caractérisques disponible pour ce produit.</p>
                          <div class="flex flex-wrap -mx-3 mb-2">
                          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="check" name="taille" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="taille" class="font-medium text-gray-700">TAILLE</label>
                                </div>
                              </div>
                              <textarea id="couleur" name="couleuradd" rows="5" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Saisir les tailles du produit séparée par | "></textarea>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="check1" name="couleur" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="couleur" class="font-medium text-gray-700">COULEUR</label>
                                </div>
                              </div>
                              <textarea id="couleur" name="couleuradd" rows="5" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Saisir les couleurs du produit séparée par | "></textarea>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="check2" name="forme" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="forme" class="font-medium text-gray-700">FORME</label>
                                </div>
                              </div>
                              <textarea id="forme" name="formeadd" rows="5" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Saisir les formes du produit séparée par | "></textarea>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <div class="mt-4 space-y-4">
                          <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="longueur" name="longueur" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="longueur" class="font-medium text-gray-700">LONGUEUR</label>
                                  <p class="text-gray-500">La longueur du produit est modifiable ? </p>
                                </div>
                              </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input name="largeur" name="largeur" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="largeur" class="font-medium text-gray-700">LARGEUR</label>
                                  <p class="text-gray-500">La largeur du produit est modifiable ? </p>
                                </div>
                              </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                              <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="hauteur" name="hauteur" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="hauteur" class="font-medium text-gray-700">HAUTEUR</label>
                                  <p class="text-gray-500">La hauteur du produit est modifiable ? </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>

  </html>