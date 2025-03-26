<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{
    protected string $id = 'Nikon:PreviewImage';

    protected string $name = 'PreviewImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVI
             * line : 191121
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Nikon::AVI.Nikon:PreviewImage',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCDT
             * line : 202096
             * type : undef
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Nikon::NCDT.Nikon:PreviewImage',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
