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
class CountryCode extends AbstractTagGroup
{
    protected string $id = 'RIFF:CountryCode';

    protected string $name = 'CountryCode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Country Code',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::CSET
             * line : 231374
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::CSET.RIFF:CountryCode',
            'desc' => [
                'en' => 'Country Code',
            ],
        ],
    ];

    protected int $count = 0;
}
