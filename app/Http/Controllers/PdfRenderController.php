<?php

namespace App\Http\Controllers;

use App\Http\Requests\PdfRenderAsyncRequest;
use App\Http\Requests\PdfRenderRequest;
use App\Models\DocumentTemplate;
use App\Services\PdfRenderManager;
use Illuminate\Http\JsonResponse;

class PdfRenderController extends Controller
{
    public function render(
        PdfRenderRequest $request,
        DocumentTemplate $documentTemplate,
        PdfRenderManager $manager
    ) {
        $renderResult = $manager->render(
            $documentTemplate,
            $request->input('variables') ?: [],
            $request->getMetadata(),
        );

        if ($renderResult->isError()) {
            return new JsonResponse([
                'outcome' => $renderResult->getErrorResult()->errorCode,
            ], 400);
        }

        $okResult = $renderResult->getOkResult();

        return new JsonResponse([
            'outcome' => 'SUCCESS',
            'document_file_uuid' => $okResult->file->uuid,
            'url' => $okResult->file->url,
            'size' => $okResult->file->size,
        ]);
    }

    public function renderAsync(PdfRenderAsyncRequest $request, DocumentTemplate $documentTemplate)
    {

    }
}
