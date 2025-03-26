<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFIntegrationTime extends AbstractTagGroup
{
    protected string $id = 'Pentax:AFIntegrationTime';

    protected string $name = 'AFIntegrationTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Integration Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AFInfo
             * line : 196703
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AFInfo.Pentax:AFIntegrationTime',
            'desc' => [
                'en' => 'AF Integration Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
