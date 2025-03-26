<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEBSequenceAutoCancel extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AEBSequenceAutoCancel';

    protected string $name = 'AEBSequenceAutoCancel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AEB Sequence/Auto Cancel',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53339
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:AEBSequenceAutoCancel',
            'desc' => [
                'en' => 'AEB Sequence/Auto Cancel',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53595
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:AEBSequenceAutoCancel',
            'desc' => [
                'en' => 'AEB Sequence/Auto Cancel',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55836
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:AEBSequenceAutoCancel',
            'desc' => [
                'en' => 'AEB Sequence/Auto Cancel',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56083
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:AEBSequenceAutoCancel',
            'desc' => [
                'en' => 'AEB Sequence/Auto Cancel',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56619
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:AEBSequenceAutoCancel',
            'desc' => [
                'en' => 'AEB Sequence/Auto Cancel',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56857
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:AEBSequenceAutoCancel',
            'desc' => [
                'en' => 'AEB Sequence/Auto Cancel',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
