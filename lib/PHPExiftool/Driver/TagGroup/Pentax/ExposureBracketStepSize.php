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
class ExposureBracketStepSize extends AbstractTagGroup
{
    protected string $id = 'Pentax:ExposureBracketStepSize';

    protected string $name = 'ExposureBracketStepSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Bracket Step Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::CameraSettings
             * line : 197645
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::CameraSettings.Pentax:ExposureBracketStepSize',
            'desc' => [
                'en' => 'Exposure Bracket Step Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
