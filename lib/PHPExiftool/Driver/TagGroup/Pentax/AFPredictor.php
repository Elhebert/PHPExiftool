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
class AFPredictor extends AbstractTagGroup
{
    protected string $id = 'Pentax:AFPredictor';

    protected string $name = 'AFPredictor';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Predictor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AFInfo
             * line : 196697
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AFInfo.Pentax:AFPredictor',
            'desc' => [
                'en' => 'AF Predictor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
