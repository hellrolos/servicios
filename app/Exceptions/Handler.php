<?php

namespace App\Exceptions;

use Exception;
use MessagesCodes;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof \Illuminate\Auth\AuthenticationException){
            return redirect('/')->with('error', 'Por favor inicia sesión');
        }
        /*if($exception instanceof MethodNotAllowedHttpException){
            return response()->view('errors.default', array(
                'code' => $exception->getStatusCode(),
                'message' => 'Metodo de acceso no permitido'
           ));
        }*/
        $message = $this->getMessage($exception->getStatusCode());
        return response()->view('errors.default', array(
                'code' => $exception->getStatusCode(),
                'message' => $message
           ));
        return parent::render($request, $exception);
    }

    public function getMessage($code){
        switch($code){
            case '400':
                        $message = 'Petición no valida';
                break;
            case '401':
                        $message = 'Acceso no autorizado';
                break;
            case '402':
                        $message = 'Pago requerido';
                break;
            case '403':
                        $message = 'Acceso Prohibido';
                break;
            case '404':
                        $message = 'Elemento no encontrado';
                break;
            case '405':
                        $message = 'Metodo no Permitido';
                break;
            case '406':
                        $message = 'Metodo no aceptado';
                break;
            case '407':
                        $message = 'Se requiere autentificación del proxxy';
                break;
            case '408':
                        $message = 'Tiempo agotado de petición';
                break;
            case '409':
                        $message = 'Conflicto';
                break;
            case '410':
                    $message = 'Recurso solicitado ya no se encuentra disponible';
            break;
            case '411':
                        $message = 'Longitud requerida';
                break;
            case '412':
                        $message = 'Falló condición previa';
                break;
            case '413':
                        $message = 'Entidad de solicitud demasiado larga';
                break;
            case '414':
                        $message = 'URL de solicitud demasiado larga';
                break;
            case '415':
                        $message = 'Tipo de archivo no soportado';
                break;
            case '416':
                    $message = 'Rango solicitado no satisfactorio';
            break;
            case '417':
                        $message = 'Expectativa fallida';
            break;
            case '418':
                        $message = 'Soy una tetera(RFC 2324)';
            break;
            case '420':
                        $message = 'Mejorar tu calma(Twitter)';
            break;
            case '422':
                        $message = 'Entidad no procesable';
            break;
            case '423':
                        $message = 'Bloqueado';
            break;
            case '424':
                        $message = 'Dependencia fallida';
            break;
            case '425':
                        $message = 'Reservado para WebDav';
            break;
            case '426':
                        $message = 'Requiere actualización';
            break;
            case '428':
                        $message = 'Precondición requerida';
            break;
            case '429':
                        $message = 'Demasiadas peticiones';
            break;
            case '431':
                        $message = 'Campos del encabezado de la petición demasiado largos';
            break;
            case '444':
                        $message = 'No responde (Ngynx)';
            break;
            case '449':
                        $message = 'Reintentar con (Microsoft)';
            break;
            case '450':
                        $message = 'Bloqueado por control parental de Windows (Microsoft)';
            break;
            case '451':
                        $message = 'No disponible por razones legales';
            break;
            case '499':
                        $message = 'Solicitud de cliente cerrada (Ngynx)';
            break;
            case '500':
                        $message = 'Error interno del servidor';
            break;
            case '501':
                        $message = 'No se ha implementado';
            break;
            case '502':
                        $message = 'Mala puerta de enlace';
            break;
            case '503':
                        $message = 'Servicio no disponible';
            break;
            case '504':
                        $message = 'Tiempo de espera agotado de la puerta de enlace';
            break;
            case '505':
                        $message = 'Versión HTTP no soportada';
            break;
            case '506':
                        $message = 'Variante también negocia';
            break;
            case '507':
                        $message = 'Espacio insuficiente';
            break;
            case '508':
                        $message = 'Bucle detectado';
            break;
            case '509':
                        $message = 'Límite de ancho de banda excedido';
            break;
            case '510':
                        $message = 'No extendido';
            break;
            case '511':
                        $message = 'Autentificación de red requerida';
            break;
            case '598':
                        $message = 'Error de tiempo de espera de lectura de la red';
            break;
            case '599':
                        $message = 'Error de tiempo de espera de conexión de red';
            break;
            default:
                        $message = 'Error no conocido';
        }
        return $message;
    }
}
