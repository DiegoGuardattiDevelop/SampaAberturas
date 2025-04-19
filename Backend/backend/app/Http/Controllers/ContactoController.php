<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'firstName' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:1000',
            'fileUpload' => 'nullable|file|mimes:pdf,jpg,png|max:5120', // 5MB máximo
        ]);

        // Procesar el archivo adjunto si existe
        $archivoPath = null;
        if ($request->hasFile('fileUpload')) {
            $archivoPath = $request->file('fileUpload')->store('contacto_adjuntos');
        }

        // Datos para el email
        $contactoData = [
            'nombre' => $request->firstName . ' ' . $request->lastName,
            'email' => $request->email,
            'asunto' => $request->subject,
            'mensaje' => $request->message,
            'archivo' => $archivoPath
        ];

        // Enviar email (necesitarás configurar previamente Mail)
        Mail::to('tuemail@empresa.com')->send(new ContactoMailable($contactoData));

        // Redireccionar con mensaje de éxito
        return redirect()->route('contacto')->with('success', '¡Gracias por contactarnos! Hemos recibido tu mensaje y te responderemos pronto.');
    }
}