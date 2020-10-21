<x-clients>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900">Datos Turno</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Ingrese datos del turno
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method='POST' action="{{ route('clients.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-5 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block uppercase tracking-wide font-medium text-xs font-bold text-gray-700" for="name">
                                        Fecha
                                    </label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" placeholder="Juan Julian" id="name" name="name">
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block uppercase tracking-wide font-medium text-xs font-bold text-gray-700" for="lastname">
                                        Hora
                                    </label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" placeholder="Martinez" id="lastname" name="lastname">
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block uppercase tracking-wide font-medium text-xs font-bold text-gray-700" for="lastname">
                                        Cliente
                                    </label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" placeholder="Martinez" id="lastname" name="lastname">
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block uppercase tracking-wide font-medium text-xs font-bold text-gray-700" for="lastname">
                                        Servicio
                                    </label>
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" placeholder="Martinez" id="lastname" name="lastname">
                                </div>
                                
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Registrar turno
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-clients>      
