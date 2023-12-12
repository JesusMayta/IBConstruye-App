<main class="min-h-max relative bg-cover bg-center flex flex-row" style="background-image: url('src/views/assets/svg/bg_contacto.svg')">

        <div class="w-full lg:w-[54%] xl:w-[50%] 2xl:w-[48%] flex flex-col justify-center items-center px-3 py-28">

            <h1 class="text-black font-extrabold text-5xl sm:text-6xl mt-4">Contactanos</h1>

            <div
                class="flex flex-col md:flex-row justify-center items-center  w-full mt-10 gap-12 md:gap-10 xl:gap-28 ">
                <div
                    class="flex flex-col items-center gap-3 px-6 py-10 w-80 md:w-auto h-64 bg-[#E9A825] rounded-xl shadow-2xl shadow-yellow-900 border border-white hover:bg-black hover:text-white cursor-pointer hover:shadow-gray-950 transition-colors duration-500">
                    <i class="bi bi-envelope-paper text-4xl text-white"></i>
                    <p class="text-2xl font-extrabold">Email</p>
                    <p>Escribenos a:</p>
                    <a class="text-lg md:text-sm font-bold">ibconstruye@corpibgroup.com</a>
                </div>
                <div
                    class="flex flex-col items-center gap-3 px-8 py-10 w-80 md:w-auto h-64 bg-[#E9A825] rounded-xl shadow-2xl shadow-yellow-900 border border-white hover:bg-black hover:text-white cursor-pointer hover:shadow-gray-950 transition-colors duration-500">
                    <i class="bi bi-geo-alt text-4xl text-white"></i>
                    <p class="text-2xl font-extrabold">Ubicación</p>
                    <p>Ubicanos en:</p>
                    <a class="text-xs text-center font-bold">Av. Circunvalación Golf Los Incas,
                        <br />Nro 208, Torre
                        3 oficina 602B <br />Santiago de Surco</a>
                </div>
            </div>

            <p class="font-medium mt-10 text-center">Bienvenido a nuestra página de contacto, el lugar donde nos
                encantaría escucharte. ¿Tienes preguntas o comentarios? Estamos aquí para ayudarte. Completa el
                formulario
                a continuación y nos pondremos en
                contacto contigo <br /> lo antes posible</p>

            <div class="flex flex-col gap-y-2 w-4/5 my-8">

                <h2 class="text-center font-black text-2xl">Completa el formulario</h2>

                <label for="tipoPersona" class="font-bold">Tipo de persona:</label>
                <select name="tipoPersona" id="tipoPersona"
                    class="bg-black p-2 rounded-lg  cursor-pointer focus:outline-none text-white shadow-lg shadow-gray-700">
                    <option value="unselect" selected>Elige una opcion:</option>
                    <option value="personaNatural">Persona natural</option>
                    <option value="personaEmpresa">Persona con empresa</option>
                </select>
            </div>

            <form action="" method="post" class="w-full">

                <!-- Persona natural -->
                <div id="form_persona_natural" class="hidden w-full mt-4">
                    <div class="flex flex-col sm:flex-row justify-center gap-4 w-full">
                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="nombresPersona" class="font-bold">Nombres y apellidos:</label>
                            <input type="text" name="nombresPersona" id="nombresPersona"
                                placeholder="Ingrese su nombre completo"
                                class="px-4 py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 text-white shadow-lg shadow-gray-700"
                                autocomplete="off" required />
                        </div>
                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="emailPersona" class="font-bold">Email:</label>
                            <input type="email" name="emailPersona" id="emailPersona" placeholder="example@mail.com"
                                oninvalid="setCustomValidity('Ingrese un email válido')" oninput="setCustomValidity('')"
                                class="px-4 py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 text-white shadow-lg shadow-gray-700" />
                        </div>
                    </div>
                </div>

                <!-- Empresa -->
                <div id="form_persona_empresa" class="hidden w-full mt-4 px-2 sm:px-0">
                    <div class="flex flex-col sm:flex-row justify-center gap-4 w-full">
                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="empresa" class="font-bold">Empresa:</label>
                            <input type="text" name="empresa" id="empresa" placeholder="Nombre de tu empresa"
                                autocomplete="off"
                                class="px-4 py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 text-white shadow-lg shadow-gray-700"
                                required />
                        </div>

                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="rubro" class="font-bold">Rubro de la empresa:</label>
                            <select type="text" id="rubro" name="rubro"
                                class="p-2 bg-black rounded-lg focus:outline-none cursor-pointer text-white font-medium shadow-lg shadow-gray-700"
                                required>
                                <option value="" selected>Seleccione un rubro</option>
                                <option value="Construccion">Construccion</option>
                                <option value="Electricidad">Electricidad</option>
                                <option value="Hidrocarburos">Hidrocarburos</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Ingenieria">Ingenieria</option>
                                <option value="Mineria">Mineria</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center gap-4 w-full mt-6">
                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="ruc" class="font-bold">RUC:</label>
                            <input type="text" name="ruc" id="ruc" placeholder="ej:20556778994" autocomplete="off"
                                class="px-4 py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 text-white shadow-lg shadow-gray-700"
                                pattern="[2][0-9]{10}" oninvalid="setCustomValidity('Ingrese un RUC válido')"
                                oninput="setCustomValidity('')" maxlength="11" minlength="11" required />
                            <p id="alert_ruc" class="hidden text-red-600 text-sm font-bold"></p>
                        </div>

                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="cargo" class="font-bold">Cargo:</label>
                            <input type="text" name="cargo" id="cargo" placeholder="Cargo que ejerce"
                                class="px-4 py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 text-white shadow-lg shadow-gray-700"
                                required />
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center gap-4 w-full mt-6">
                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="emailEmpresa" class="font-bold">Email empresa:</label>
                            <input type="email" name="emailEmpresa" id="emailEmpresa" placeholder="enterprise@org.pe"
                                autocomplete="off" oninvalid="setCustomValidity('Ingrese un email válido')"
                                oninput="setCustomValidity('')"
                                class="px-4 py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 text-white shadow-lg shadow-gray-700"
                                required />
                        </div>

                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12">
                            <label for="tipoServicio" class="font-bold">Tipo de servicio a solicitar:</label>
                            <select id="tipoServicio" name="tipoServicio"
                                class="p-2 bg-black rounded-lg focus:outline-none cursor-pointer text-white font-medium shadow-lg shadow-gray-700"
                                required>
                                <option selected value="">Elige un servicio:</option>
                                <option value="Remodelacion Instalacion">Remodelacion de Instalaciones</option>
                                <option value="Desarrollo de edificacion">Desarrollo de Proyecto de Edificacion</option>
                                <option value="Construccion nuevas">Construcción de Instalaciones Nuevas</option>
                                <option value="Mantenimiento e instalaciones">Mantenimiento de Edificios e Instalaciones
                                </option>
                                <option value="Diseño interior">Diseño de Interiores</option>
                                <option value="Alquiler maquinaria">Alquiler Maquinaria</option>
                                <option value="Movimiento de tierras">Movimiento de Tierras</option>
                                <option value="Diseño de planta">Diseño de Planta Industrial</option>
                                <option value="Construccion y manteimiento vial">Construcción y Mantenimiento Vial
                                </option>
                                <option value="Otros mas">Otros</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="form_general" class="hidden w-full">
                    <div class="flex flex-col sm:flex-row justify-center gap-4 w-full mt-6">
                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12 relative text-white">
                            <label for="telefono" class="font-bold text-black">Teléfono fijo:
                                (Opcional)</label>
                            <input type="text" placeholder="ej:332-7878" name="telefono" id="telefono"
                                class="ps-[50px] py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 shadow-lg shadow-gray-700"
                                pattern="[2-7][0-9]{6}" minlength="7" maxlength="7"
                                oninvalid="setCustomValidity('Ingrese un número válido para Lima-Perú')"
                                oninput="setCustomValidity('')" />
                            <span class="absolute pe-1 left-[7px] top-10 border-r-2 border-white font-bold">(01)</span>
                            <p id="alert_phone" class="hidden text-red-600 text-sm font-bold"></p>
                        </div>

                        <div class="flex flex-col gap-y-2 w-full sm:w-5/12 relative text-white">
                            <label for="celular" class="font-bold text-black">Celular:</label>
                            <input type="text" name="celular" id="celular" placeholder="ej:922545301"
                                class="ps-[62px] py-2 bg-black rounded-lg focus:outline-none placeholder:text-gray-500 shadow-lg shadow-gray-700"
                                autocomplete="off" pattern="[9][0-9]{8}"
                                oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')"
                                oninput="setCustomValidity('')" maxlength="9" minlength="9" required />
                            <span class="absolute pe-1 left-[7px] top-10 border-r-2 border-white font-bold">(+51)</span>
                            <p id="alert_cel" class="hidden text-red-600 text-sm font-bold"></p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 w-full mt-6">
                        <label for="messageForm" class="font-bold ms-0 sm:ms-16">Mensaje: </label>
                        <textarea name="messageForm" rows="4" id="messageForm" placeholder="Escribenos un mensaje.."
                            class="rounded-lg bg-black text-white placeholder:text-gray-500 px-3 py-2 shadow-lg shadow-gray-700 w-full sm:w-[85%] mx-auto focus:outline-none"
                            required></textarea>
                    </div>

                    <div class="flex flex-row justify-center gap-4 w-full mt-8 px-6 sm:px-10">
                        <input type="checkbox" class="h-7 w-7 sm:h-5 sm:w-5 cursor-pointer" name="checkInput"
                            id="checkInput" required />
                        <p class="text-sm font-black">Aceptar las <a href="#"
                                class="text-blue-700 font-black underline">condiciones y
                                términos
                                detallados en la sección
                                política de
                                tratamiento de datos personales</a></p>
                    </div>
                    <div class="w-4/5 mx-auto mt-11">
                        <button type="submit"
                            class="bg-[#E9A825] w-full py-3 rounded-lg border border-gray-800 hover:bg-yellow-700 hover:text-white text-lg transition-colors duration-500 font-bold shadow-lg shadow-yellow-800">Enviar</button>
                    </div>
                </div>


            </form>

            <!-- Formulario empresa -->


        </div>

        <!-- Image contact -->
        <div class="w-0 lg:w-[46%] xl:w-[50%] 2xl:w-[52%] overflow-hidden ">
            <div class="relative w-full h-full -skew-x-12 ms-[158px] shadow-xl shadow-gray-950 overflow-hidden">
                <div
                    class="absolute bg-cover bg-center skew-x-12 top-0 bottom-0 right-0 -left-[155px]"  style="background-image: url('src/views/assets/images/bg_contact.jpg')">
                </div>
            </div>
        </div>

        </div>
    </main>