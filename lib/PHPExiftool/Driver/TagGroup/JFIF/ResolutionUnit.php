<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JFIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ResolutionUnit extends AbstractTagGroup
{
    protected string $id = 'JFIF:ResolutionUnit';

    protected string $name = 'ResolutionUnit';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Resolution Unit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JFIF::Main
             * line : 104814
             * type : int8u
             * writable : true
             * count :
             * flags : mandatory
             */
            'id' => 'JFIF::Main.JFIF:ResolutionUnit',
            'desc' => [
                'en' => 'Resolution Unit',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2176;
}
