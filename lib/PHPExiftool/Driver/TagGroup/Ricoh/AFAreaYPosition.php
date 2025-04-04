<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaYPosition extends AbstractTagGroup
{
    protected string $id = 'Ricoh:AFAreaYPosition';

    protected string $name = 'AFAreaYPosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Y Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::Main
             * line : 233850
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Main.Ricoh:AFAreaYPosition',
            'desc' => [
                'en' => 'AF Area Y Position',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
