<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AttitudeTarget extends AbstractTagGroup
{
    protected string $id = 'GoPro:AttitudeTarget';

    protected string $name = 'AttitudeTarget';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Attitude Target',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPMF
             * line : 97576
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'GoPro::GPMF.GoPro:AttitudeTarget',
            'desc' => [
                'en' => 'Attitude Target',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
