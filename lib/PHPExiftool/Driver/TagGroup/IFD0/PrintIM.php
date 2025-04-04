<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintIM extends AbstractTagGroup
{
    protected string $id = 'IFD0:PrintIM';

    protected string $name = 'PrintIM';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Print Image Matching',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84036
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.IFD0:PrintIM',
            'desc' => [
                'en' => 'Print Image Matching',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
