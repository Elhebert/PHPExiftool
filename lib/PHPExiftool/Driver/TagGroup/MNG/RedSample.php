<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RedSample extends AbstractTagGroup
{
    protected string $id = 'MNG:RedSample';

    protected string $name = 'RedSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Red Sample',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::BasisObject
             * line : 111876
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::BasisObject.MNG:RedSample',
            'desc' => [
                'en' => 'Red Sample',
            ],
        ],
    ];

    protected int $count = 0;
}
