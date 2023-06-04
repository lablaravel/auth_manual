<x-app-layout-login>    
<div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
          <div class="leading-loose">
            <form  action={{ route('login.store')}} method="POST" class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
              @csrf
                <p class="text-white font-medium text-center text-lg font-bold">LOGIN</p>
                  <div class="">
                    <label class="block text-sm text-white" for="cpf">CPF</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="cpf" name="cpf" placeholder="Digite o cpf" aria-label="cpf" required>
                  </div>
                  <div class="mt-2">
                    <label class="block  text-sm text-white">Telefone</label>
                     <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                      type="tel" id="cellphone" name="cellphone" placeholder="Digite o seu telefone" arial-label="cellphone" required>
                  </div>
    
                  <div class="mt-4 items-center flex justify-between">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                      type="submit">Entrar</button>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                      href="#">Esqueceu a senha ?</a>
                  </div>
                  <div class="text-center">
                    <a class="inline-block right-0 align-baseline font-light text-sm text-500 hover:text-red-400">
                        Criar uma conta
                    </a>
                  </div>
    
            </form>
    
          </div>
        </div>
      </div>
    </div>
</x-app-layout-login>   