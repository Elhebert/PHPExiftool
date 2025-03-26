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
class EmbeddedPNG extends AbstractTagGroup
{
    protected string $id = 'File:EmbeddedPNG';

    protected string $name = 'EmbeddedPNG';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Embedded PNG',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Extra
             * line : 1994
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'BMP::Extra.File:EmbeddedPNG',
            'desc' => [
                'en' => 'Embedded PNG',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
