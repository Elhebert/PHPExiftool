<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Motorola;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BuildNumber extends AbstractTagGroup
{
    protected string $id = 'Motorola:BuildNumber';

    protected string $name = 'BuildNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Build Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Motorola::Main
             * line : 127221
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Motorola::Main.Motorola:BuildNumber',
            'desc' => [
                'en' => 'Build Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
