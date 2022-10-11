<template>
    <Layout>

        <Head title="Editar" />
        <div class="container">
            <h1 class="text-center">Atualização do Eletrodoméstico</h1>
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="updateEletrodomestico">
                        <div class="form-group mb-3">
                            <label for="title">Nome do Eletrodoméstico</label>
                            <input type="text" class="form-control" id="nome" name="nome" v-model="form.nome"
                                placeholder="Ex: Geladeira Frost Free">
                            <div v-if="errors.nome">
                                <div id="alerta-danger">
                                    {{ errors.nome }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Descrição do Eletrodoméstico</label>
                            <textarea class="form-control" name="descricao" id="descricao"
                                v-model="form.descricao"
                                placeholder="Ex: Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir."></textarea>
                            <div v-if="errors.descricao">
                                <div id="alerta-danger">
                                    {{ errors.descricao }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Tensão do Eletrodoméstico</label>
                            <select class="form-select" id="tensao" name="tensao" v-model="form.tensao">
                                <option :value="null" disabled>Selecione a tensão...</option>
                                <option value="220V">220V</option>
                                <option value="110V">110V</option>
                                <option value="Bivolt">Bivolt</option>
                            </select>
                            <div v-if="errors.tensao">
                                <div id="alerta-danger">
                                    {{ errors.tensao }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Marca do Eletrodoméstico</label>
                            <input type="text" class="form-control" id="marca" name="marca"
                                v-model="form.marca"
                                placeholder="Ex: Electrolux, Brastemp, Fischer, Samsung ou LG">
                            <div v-if="errors.marca">
                                <div id="alerta-danger">
                                    {{ errors.marca }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 d-flex justify-content-center">
                            <button class="btn btn-dark" type="submit">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from './Menu.vue'
import { Head, useForm } from "@inertiajs/inertia-vue3";
import route from '../../../vendor/tightenco/ziggy/src/js';

export default {
    components: {
        Layout,
        Head
    },
    props: {

        errors: Object
    },
    setup() {
        const form = useForm({
            nome: null,
            descricao: null,
            tensao: null,
            marca: null,
        })
        return { form }
    },
    methods: {
        updateEletrodomestico() {
           // this.$inertia.put(route('update',2))
        }
    }
}
</script>
