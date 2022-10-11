<template>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <Link class="nav-link active" href="/">Inicio</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link active" href="/create">Cadastro</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div v-if="$page.props.flash.message_success">
            <div class="alert alert-success alert-dismissible fade show" id="alert-create" role="alert">
                {{ $page.props.flash.message_success }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <div v-if="$page.props.flash.message_update">
            <div class="alert alert-warning alert-dismissible fade show" id="alert-delete" role="alert">
                {{ $page.props.flash.message_update }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <div v-if="$page.props.flash.message_delete">
            <div class="alert alert-warning alert-dismissible fade show" id="alert-delete" role="alert">
                {{ $page.props.flash.message_delete }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <slot />
    </main>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
    }
}
</script>