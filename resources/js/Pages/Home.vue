<template>
    <Layout>

        <Head title="Inicio" />
        <div class="container">
            <h1 class="text-center">Painel de Gestão de Produtos</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr scope="row">
                                <th class="text-center" colspan="6">Eletrodomésticos</th>
                            </tr>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Tensão</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Editar/Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="!eletrodomesticos.length">
                                <th scope="row"></th>
                                <td colspan="5">
                                    <h3 class="text-center">Nenhum dado cadastrado</h3>
                                </td>
                            </tr>
                            <tr v-else v-for="item in eletrodomesticos" :key="eletrodomesticos.id">
                                <th scope="row">{{ item.id }}</th>
                                <td class="px-4 py-2">{{ item.nome }}</td>
                                <td class="px-4 py-2">{{ item.descricao }}</td>
                                <td>{{ item.tensao }}</td>
                                <td>{{ item.marca }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <Link :href="`edit/${item.id}`"><button
                                            class="btn btn-success">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </button></Link>
                                        <button class="btn btn-danger" @click.prevent="destroy(`${item.id}`)"
                                            type="submit">
                                            <ion-icon name="close-outline"></ion-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from './Menu.vue'
import { Head } from '@inertiajs/inertia-vue3'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
    data() {
        return {
            eletrodomestico: {
                nome: null,
                descricao: null,
                tensao: null,
                marca: null
            },
        }
    },
    components: {
        Head,
        Layout,
        Link
    },
    props: {
        errors: Object,
        eletrodomesticos: Object
    },
    methods: {
        destroy(id) {
            if (confirm("Tem Certeza que Deseja Excluir o item?!")) {
                Inertia.delete(`${id}`);
            } else {
                return
            }
        }
    }
}
</script>