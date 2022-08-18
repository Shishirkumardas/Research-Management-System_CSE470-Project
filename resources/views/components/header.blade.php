<header>
    <nav class="py-2 w-100">
        <div class="d-block d-md-flex">

            <div class="col-md-6 offset-md-3 d-flex col-12 justify-content-center">
                <div class="product-logo header-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-postage-fill" viewBox="0 0 16 16">
                        <path d="M4.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-7Z"/>
                        <path d="M3.5 1a1 1 0 0 0 1-1h1a1 1 0 0 0 2 0h1a1 1 0 0 0 2 0h1a1 1 0 1 0 2 0H15v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1h-1.5a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0H1v-1a1 1 0 1 0 0-2v-1a1 1 0 1 0 0-2V9a1 1 0 1 0 0-2V6a1 1 0 0 0 0-2V3a1 1 0 0 0 0-2V0h1.5a1 1 0 0 0 1 1ZM3 3v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z"/>
                      </svg>

                    <div>Research Management Project</div>
                </div>
            </div>

            <div
                class="col-lg-2 offset-lg-1 col-md-3 col-12  h-100 align-self-center py-2 d-flex justify-content-around align-items-center">

                <div class="icons home-icon {{ request()->is('home') ? 'active' : '' }}">
                    <svg id="home" viewBox="0 0 24 24">
                        <path
                            d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                    </svg>
                </div>

                <div
                    class="icons profile-icon {{ isset($_COOKIE['person_id']) && request()->is('profile-' . $_COOKIE['person_id']) ? 'active' : '' }}">
                    <svg id="user" viewBox="0 0 448 512">
                        <path
                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                        </path>
                    </svg>
                </div>

                <div class="icons create-post-icon">
                    <svg id="plus" viewBox="0 0 448 512">
                        <path
                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                        </path>
                    </svg>
                </div>

                <div class="btn-group">
                    <button type="button" class="more-icon-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="icons more-options-icon">
                            <svg id="caret-down" viewBox="0 0 320 512">
                                <path
                                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <!-- Dropdown menu links -->
                        <!-- <li class="developer-profile"><a class="dropdown-item" href="#">Developer's Profile</a></li> -->
                        <li class="log-out"><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>
