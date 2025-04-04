<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MSDocumentTextPosition extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MSDocumentTextPosition';

    protected string $name = 'MSDocumentTextPosition';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MS Document Text Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83316
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MSDocumentTextPosition',
            'desc' => [
                'en' => 'MS Document Text Position',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
