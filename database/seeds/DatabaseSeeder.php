<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            PermisoSeeder::class,
            RolSeeder::class,
            UsuarioSeeder::class,
            tarjetaSeeder::class,
            DocumentoIdentidadSeeder::class,
            ClienteSeeder::class,
            PaisSeeder::class,
            DepartamentoSeeder::class,
            ProvinciaSeeder::class,
            DistritoSeeder::class,
            ZonaRepartoSeeder::class,
            TransporteSeeder::class,
            ConductorSeeder::class,
            NotificacionSeeder::class,
            EmpresarioSeeder::class,
            TiendaSeeder::class,
            MonedaSeeder::class,
            HorarioSeeder::class,
            PromocionSeeder::class,
            EstadoPedidoSeeder::class,
            DescuentoSeeder::class,
            CuotaSeeder::class,
            FormaPagoSeeder::class,
            PedidoSeeder::class,
            FeedbackSeeder::class,
            IdiomaSeeder::class,
            ParteSeeder::class,
            CategoriaSeeder::class,
            UnidadDeMedidaSeeder::class,
            ProveedorSeeder::class,
            RubroSeeder::class,
            MarcaSeeder::class,
            MedidaSeeder::class,
            ExistenciaSeeder::class,
            CalificacionSeeder::class,
            ProductoSeeder::class,
            TipoGiftCardSeeder::class,
            GiftCardSeeder::class,
            ParteIdiomaSeeder::class,
            CategoriaIdiomaSeeder::class,
            ProductoIdiomaSeeder::class,
            DetallePedidoSeeder::class,
            ParteProductoSeeder::class,
            GiftPedidoSeeder::class,
            UsuarioRolSeeder::class,
            PermisoRolSeeder::class,
            SmsLogSeeder::class,


        ]);
    }
}
