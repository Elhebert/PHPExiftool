<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SamplePeriod extends AbstractTagGroup
{
    protected string $id = 'RIFF:SamplePeriod';

    protected string $name = 'SamplePeriod';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sample Period',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Sampler
             * line : 231789
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Sampler.RIFF:SamplePeriod',
            'desc' => [
                'en' => 'Sample Period',
            ],
        ],
    ];

    protected int $count = 0;
}
