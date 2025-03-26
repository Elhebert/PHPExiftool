<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReferenceVirtual extends AbstractTagGroup
{
    protected string $id = 'Matroska:ReferenceVirtual';

    protected string $name = 'ReferenceVirtual';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Reference Virtual',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119364
             * type : signed
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:ReferenceVirtual',
            'desc' => [
                'en' => 'Reference Virtual',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
