<?php

namespace App\Http\Controllers\Api\V1\Swagger;

use App\Http\Controllers\Api\V1\Controller;

/**
 *
 * @OA\Post(
 *    path="/api/v1/notebooks",
 *    summary="Создать запись",
 *    tags={"notebook"},
 *
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                @OA\Schema(
 *                    @OA\Property(property="full_name", type="string", example="Mackenzie Goldner DVM"),
 *                    @OA\Property(property="company", type="string", example="Walker-Schultz"),
 *                    @OA\Property(property="phone_number", type="string", example="1-409-706-4614"),
 *                    @OA\Property(property="email", type="string", example="jess.reynolds@hotmail.com"),
 *                    @OA\Property(property="date_of_birth", type="date", example="2018-04-16"),
 *                    @OA\Property(property="photo", type="string", example="https://via.placeholder.com/640x480.png/008855?text=exercitationem"),
 *                )
 *            }
 *        )
 *    ),
 *
 *    @OA\Response(
 *        response=201,
 *        description="created",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="object",
 *                @OA\Property(property="full_name", type="string", example="Mackenzie Goldner DVM"),
 *                @OA\Property(property="company", type="string", example="Walker-Schultz"),
 *                @OA\Property(property="phone_number", type="string", example="1-409-706-4614"),
 *                @OA\Property(property="email", type="string", example="jess.reynolds@hotmail.com"),
 *                @OA\Property(property="date_of_birth", type="date", example="2018-04-16"),
 *                @OA\Property(property="photo", type="string", example="https://via.placeholder.com/640x480.png/008855?text=exercitationem"),
 *            ),
 *        ),
 *    ),
 *  ),
 *
 * @OA\Get(
 *    path="/api/v1/notebooks",
 *    summary="Список записей",
 *    tags={"notebook"},
 *
 *    @OA\Parameter(
 *        name="page",
 *        in="query",
 *        description="вывод следующий страницы",
 *        required=false,
 *        example=2,
 *        @OA\Schema(
 *            type="integer"
 *        )
 *    ),
 *
 *    @OA\Response(
 *        response=200,
 *        description="ok",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="object",
 *                @OA\Property(property="full_name", type="string", example="Mackenzie Goldner DVM"),
 *                @OA\Property(property="company", type="string", example="Walker-Schultz"),
 *                @OA\Property(property="phone_number", type="string", example="1-409-706-4614"),
 *                @OA\Property(property="email", type="string", example="jess.reynolds@hotmail.com"),
 *                @OA\Property(property="date_of_birth", type="date", example="2018-04-16"),
 *                @OA\Property(property="photo", type="string", example="https://via.placeholder.com/640x480.png/008855?text=exercitationem"),
 *            ),
 *        ),
 *    ),
 *
 *
 *  ),
 *
 * @OA\Get(
 *    path="/api/v1/notebooks/{notebook}",
 *    summary="Получить одну запись",
 *    tags={"notebook"},
 *    @OA\Parameter(
 *        description="Id записи",
 *        in="path",
 *        name="notebook",
 *        required=true,
 *        example=5,
 *    ),
 *
 * @OA\Response(
 *        response=200,
 *        description="ok",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="object",
 *                @OA\Property(property="full_name", type="string", example="Mackenzie Goldner DVM"),
 *                @OA\Property(property="company", type="string", example="Walker-Schultz"),
 *                @OA\Property(property="phone_number", type="string", example="1-409-706-4614"),
 *                @OA\Property(property="email", type="string", example="jess.reynolds@hotmail.com"),
 *                @OA\Property(property="date_of_birth", type="date", example="2018-04-16"),
 *                @OA\Property(property="photo", type="string", example="https://via.placeholder.com/640x480.png/008855?text=exercitationem"),
 *            ),
 *        ),
 *    ),
 *  ),
 *
 * @OA\Put(
 *    path="/api/v1/notebooks/{notebook}",
 *    summary="Обновить запись",
 *    tags={"notebook"},
 *
 *    @OA\Parameter(
 *        description="Id записи",
 *        in="path",
 *        name="notebook",
 *        required=true,
 *        example=5,
 *    ),
 *
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                @OA\Schema(
 *                    @OA\Property(property="full_name", type="string", example="Mackenzie Goldner DVM"),
 *                    @OA\Property(property="company", type="string", example="Walker-Schultz"),
 *                    @OA\Property(property="phone_number", type="string", example="1-409-706-4614"),
 *                    @OA\Property(property="email", type="string", example="jess.reynolds@hotmail.com"),
 *                    @OA\Property(property="date_of_birth", type="date", example="2018-04-16"),
 *                    @OA\Property(property="photo", type="string", example="https://via.placeholder.com/640x480.png/008855?text=exercitationem"),
 *                )
 *            }
 *        )
 *    ),
 *
 * @OA\Response(
 *        response=200,
 *        description="ok",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="object",
 *                @OA\Property(property="full_name", type="string", example="Mackenzie Goldner DVM"),
 *                @OA\Property(property="company", type="string", example="Walker-Schultz"),
 *                @OA\Property(property="phone_number", type="string", example="1-409-706-4614"),
 *                @OA\Property(property="email", type="string", example="jess.reynolds@hotmail.com"),
 *                @OA\Property(property="date_of_birth", type="date", example="2018-04-16"),
 *                @OA\Property(property="photo", type="string", example="https://via.placeholder.com/640x480.png/008855?text=exercitationem"),
 *            ),
 *        ),
 *    ),
 *  ),
 *
 *
 * @OA\Delete(
 *    path="/api/v1/notebooks/{notebook}",
 *    summary="Удаление",
 *    tags={"notebook"},
 *
 *    @OA\Parameter(
 *        description="Id записи",
 *        in="path",
 *        name="notebook",
 *        required=true,
 *        example=3,
 *    ),
 *
 *    @OA\Response(
 *        response=204,
 *        description="none content",
 *    ),
 *  ),
 *
 **/

class NoteBookController extends Controller
{


}
