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
class SignalNumber extends AbstractTagGroup
{
    protected string $id = 'MNG:SignalNumber';

    protected string $name = 'SignalNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Signal Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::Loop
             * line : 112183
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::Loop.MNG:SignalNumber',
            'desc' => [
                'en' => 'Signal Number',
            ],
        ],
    ];

    protected int $count = 0;
}
