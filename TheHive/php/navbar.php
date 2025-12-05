<nav>
<div class="flex items-center justify-center h-[120px] relative bg-white shadow">
    <img src="../../images/logonirdnoir.png" alt="Logo" class="h-12 w-12 mr-2">
    <span class="text-[2rem] text-black">THE HIVE</span>
    <!-- Hexagon with centered down-arrow, absolutely centered at bottom -->
    <button class="absolute left-1/2 z-999 transform -translate-x-1/2 translate-y-1/2 bottom-0 focus:outline-none" id="navbarDropdownButton">
        <svg width="48" height="48" viewBox="0 0 48 54" xmlns="http://www.w3.org/2000/svg">
            <!-- Hexagon -->
            <polygon points="24,3 45,15 45,39 24,51 3,39 3,15" fill="#f7f7fa" stroke="#141204" stroke-width="2"/>
            <!-- Down Arrow -->
            <polyline points="17,28 24,36 31,28" fill="none" stroke="#141204" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="24" y1="20" x2="24" y2="36" stroke="#141204" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>
    <!-- Dropdown menu, créé statiquement, responsive pour tous les écrans -->
    <div 
        id="navbarDropdownMenu"
        style="display: none; position: absolute; left: 50%; transform: translateX(-50%); top: 100%; background: #f7f7fa;  min-width: 200px; box-shadow: 0 2px 8px rgba(20,18,4,0.10); z-index: 52; padding: 18px 12px;"
        class="w-[95vw] max-w-lg flex flex-row flex-nowrap justify-center gap-6 py-4"
    >
        <!-- Ligne d'icônes centrées, chaque icône dans un hexagone -->
        <div class="flex flex-row flex-nowrap justify-center gap-6 w-full">
            <a 
                href="../../index.html"
                class="flex flex-col items-center group"
                style="text-decoration: none; color: #141204;"
            >
                <span class="block mb-1 transition group-hover:scale-105" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <svg width="64" height="64" viewBox="0 0 64 74" xmlns="http://www.w3.org/2000/svg" style="position: absolute;">
                        <polygon points="32,6 58,21 58,53 32,68 6,53 6,21" fill="#f7f7fa" stroke="#141204" stroke-width="2"/>
                    </svg>
                    <span style="position: relative; z-index: 1; display: flex; align-items: center; justify-content: center;">
                        <svg fill="#000000" width="34" height="34" viewBox="0 0 512.004 512.004" xmlns="http://www.w3.org/2000/svg">
                            <g> 
                                <g> 
                                    <g> 
                                        <path d="M362.698,307.204v-97.57l81.195-48.717c2.56-1.545,4.139-4.318,4.139-7.313V59.738c0-2.995-1.579-5.777-4.139-7.322l-85.333-51.2c-2.705-1.621-6.084-1.621-8.789,0l-80.939,48.563L187.893,1.216c-2.705-1.621-6.084-1.621-8.789,0l-85.333,51.2c-2.56,1.544-4.139,4.326-4.139,7.322v89.293l-73.003,48.674c-2.372,1.579-3.797,4.241-3.797,7.1v102.4c0,2.85,1.425,5.513,3.797,7.1l73.003,48.666v89.301c0,2.995,1.579,5.769,4.139,7.313l85.333,51.2c1.357,0.811,2.876,1.22,4.395,1.22s3.038-0.41,4.395-1.22l85.333-51.2c2.56-1.545,4.139-4.318,4.139-7.313v-89.037l81.195-48.717C361.12,312.973,362.698,310.199,362.698,307.204zM183.498,194.846l-38.4-23.04l-38.4-23.04V64.567l76.8-46.08l76.8,46.08v84.198l-38.4,23.04L183.498,194.846zM345.632,302.366l-76.8,46.08l-38.4-23.04l-38.4-23.04v-92.732l38.4-23.04l38.4-23.04l38.4,23.04l38.4,23.04V302.366z"></path> 
                                        <path d="M476.565,338.059l-48.273-45.594c-3.285-3.115-8.439-3.115-11.716,0l-48.452,45.764c-29.943,29.943-29.943,78.669,0,108.612c14.976,14.967,34.645,22.451,54.306,22.451c19.669,0,39.339-7.484,54.315-22.451C506.679,416.899,506.679,368.173,476.565,338.059z"></path> 
                                    </g> 
                                </g> 
                            </g>
                        </svg>
                    </span>
                </span>
                <span class="text-center text-base md:text-lg font-medium group-">Accueil</span>
            </a>
            <a 
                href="../../pages/nird/nird.php"
                class="flex flex-col items-center group"
                style="text-decoration: none; color: #141204;"
            >
                <span class="block mb-1 transition group-hover:scale-105" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <svg width="64" height="64" viewBox="0 0 64 74" xmlns="http://www.w3.org/2000/svg" style="position: absolute;">
                        <polygon points="32,6 58,21 58,53 32,68 6,53 6,21" fill="#f7f7fa" stroke="#141204" stroke-width="2"/>
                    </svg>
                    <span style="position: relative; z-index: 1; display: flex; align-items: center; justify-content: center;">
                        <svg width="34" height="34" viewBox="0 0 512 512" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M306.068,156.129c-6.566-5.771-14.205-10.186-22.912-13.244c-8.715-3.051-17.82-4.58-27.326-4.58 c-9.961,0-19.236,1.59-27.834,4.752c-8.605,3.171-16.127,7.638-22.576,13.41c-6.449,5.772-11.539,12.9-15.272,21.384 c-3.736,8.486-5.604,17.937-5.604,28.34h44.131c0-7.915,2.258-14.593,6.785-20.028c4.524-5.426,11.314-8.138,20.369-8.138 c8.598,0,15.328,2.661,20.197,7.974c4.864,5.322,7.297,11.942,7.297,19.856c0,3.854-0.965,7.698-2.887,11.543 c-1.922,3.854-4.242,7.586-6.959,11.197l-21.26,27.232c-4.527,5.884-16.758,22.908-16.758,40.316v10.187h44.129v-7.128 c0-2.938,0.562-5.996,1.699-9.168c1.127-3.162,6.453-10.904,8.268-13.168l21.264-28.243c4.752-6.333,8.705-12.839,11.881-19.518 c3.166-6.67,4.752-14.308,4.752-22.913c0-10.86-1.926-20.478-5.772-28.85C317.832,168.969,312.627,161.892,306.068,156.129z"></path>
                                <rect x="234.106" y="328.551" width="46.842" height="45.144"></rect>
                                <path d="M256,0C114.613,0,0,114.615,0,256s114.613,256,256,256c141.383,0,256-114.615,256-256S397.383,0,256,0z M256,448c-105.871,0-192-86.131-192-192S150.129,64,256,64c105.867,0,192,86.131,192,192S361.867,448,256,448z"></path>
                            </g>
                        </svg>
                    </span>
                </span>
                <span class="text-center text-base md:text-lg font-medium group-">NIRD</span>
            </a>
            <a 
                href="../../pages/contact/contact.html"
                class="flex flex-col items-center group"
                style="text-decoration: none; color: #141204;"
            >
                <span class="block mb-1 transition group-hover:scale-105" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <svg width="64" height="64" viewBox="0 0 64 74" xmlns="http://www.w3.org/2000/svg" style="position: absolute;">
                        <polygon points="32,6 58,21 58,53 32,68 6,53 6,21" fill="#f7f7fa" stroke="#141204" stroke-width="2"/>
                    </svg>
                    <span style="position: relative; z-index: 1; display: flex; align-items: center; justify-content: center;">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.02832 10L10.2246 14.8166C10.8661 15.2443 11.1869 15.4581 11.5336 15.5412C11.8399 15.6146 12.1593 15.6146 12.4657 15.5412C12.8124 15.4581 13.1332 15.2443 13.7747 14.8166L20.971 10M10.2981 4.06879L4.49814 7.71127C3.95121 8.05474 3.67775 8.22648 3.4794 8.45864C3.30385 8.66412 3.17176 8.90305 3.09111 9.161C3 9.45244 3 9.77535 3 10.4212V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V10.4212C21 9.77535 21 9.45244 20.9089 9.161C20.8282 8.90305 20.6962 8.66412 20.5206 8.45864C20.3223 8.22648 20.0488 8.05474 19.5019 7.71127L13.7019 4.06879C13.0846 3.68116 12.776 3.48735 12.4449 3.4118C12.152 3.34499 11.848 3.34499 11.5551 3.4118C11.224 3.48735 10.9154 3.68116 10.2981 4.06879Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </span>
                <span class="text-center text-base md:text-lg font-medium group-">Contact</span>
            </a>
            <a 
                href="../pages/login/login.php"
                class="flex flex-col items-center group"
                style="text-decoration: none; color: #141204;"
            >
                <span class="block mb-1 transition group-hover:scale-105" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <svg width="64" height="64" viewBox="0 0 64 74" xmlns="http://www.w3.org/2000/svg" style="position: absolute;">
                        <polygon points="32,6 58,21 58,53 32,68 6,53 6,21" fill="#f7f7fa" stroke="#141204" stroke-width="2"/>
                    </svg>
                    <span style="position: relative; z-index: 1; display: flex; align-items: center; justify-content: center;">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M4 12H14M14 12L11 9M14 12L11 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </span>
                <span class="text-center text-base md:text-lg font-medium group-">Login</span>
            </a>
        </div>
    </div>
</div>
</nav>




<script src="../../js/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>