<div class="bg-white">
	<div class="pt-4">

		<div class="lg:container lg:mx-auto">
			<div class="min-h-full flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
				<div class="max-w-md w-full space-y-8">
					<div>
						<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
							Connexion
						</h2>
						<p class="mt-2 text-center text-sm text-gray-600">
							ou
							<a href="#" class="font-medium text-indigo-600 hover:text-indigo-500" data-modal-toggle="register-modal">
								Inscription
							</a>
						</p>
					</div>
					<form class="mt-8 space-y-6" action="#" method="POST">
						<input type="hidden" name="remember" value="true">
						<div class="rounded-md shadow-sm -space-y-px">
							<div>
								<label for="email-address" class="sr-only">Adresse Email</label>
								<input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Adresse Email">
							</div>
							<div>
								<label for="password" class="sr-only">Mot de passe</label>
								<input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Mot de passe">
							</div>
						</div>

						<div class="flex items-center justify-between">
							<div class="flex items-center"></div>
							<div class="text-sm">
								<a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
									Mot de passe oublié ?
								</a>
							</div>
						</div>

						<div>
							<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
								<span class="absolute left-0 inset-y-0 flex items-center pl-3">
									<!-- Heroicon name: solid/lock-closed -->
									<svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
									</svg>
								</span>
								Connexion
							</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Main modal -->
<div id="register-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
	<div class="relative px-4 w-full max-w-md h-full md:h-auto">
		<!-- Modal content -->
		<div class="relative bg-coolGray rounded-lg shadow dark:bg-gray-700">
			<div class="flex justify-end p-2">
				<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="register-modal">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>
			<form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
				<h3 class="text-xl font-medium text-gray-900 dark:text-white">Inscription</h3>
				<div>
					<label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Noms & Prénoms</label>
					<input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Noms et Prénoms" required>
				</div>
				<div>
					<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
					<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
				</div>
				<div>
					<label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Téléphone</label>
					<input type="phone" name="telephone" id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
				</div>
				<div>
					<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mot de passe</label>
					<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
				</div>
				<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">S'inscrire</button>
			</form>
		</div>
	</div>
</div>