<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewPDF extends AbstractTagGroup
{
    protected string $id = 'File:PreviewPDF';

    protected string $name = 'PreviewPDF';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview PDF',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85226
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Extra.File:PreviewPDF',
            'desc' => [
                'en' => 'Preview PDF',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
