<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ControlMode extends AbstractTagGroup
{
    protected string $id = 'Canon:ControlMode';

    protected string $name = 'ControlMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Control Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52815
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:ControlMode',
            'desc' => [
                'en' => 'Control Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
