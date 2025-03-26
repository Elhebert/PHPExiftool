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
class Compass extends AbstractTagGroup
{
    protected string $id = 'Ricoh:Compass';

    protected string $name = 'Compass';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Compass',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::ThetaSubdir
             * line : 234076
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::ThetaSubdir.Ricoh:Compass',
            'desc' => [
                'en' => 'Compass',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
